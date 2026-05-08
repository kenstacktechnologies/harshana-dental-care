class DotGrid {
    constructor(container, options = {}) {
        this.container = container;
        this.dotSize = options.dotSize || 16;
        this.gap = options.gap || 32;
        this.baseColor = options.baseColor || '#5227FF';
        this.activeColor = options.activeColor || '#5227FF';
        this.proximity = options.proximity || 150;
        this.speedTrigger = options.speedTrigger || 100;
        this.shockRadius = options.shockRadius || 250;
        this.shockStrength = options.shockStrength || 5;
        this.maxSpeed = options.maxSpeed || 5000;
        this.resistance = options.resistance || 750;
        this.returnDuration = options.returnDuration || 1.5;

        this.dots = [];
        this.pointer = {
            x: 0,
            y: 0,
            vx: 0,
            vy: 0,
            speed: 0,
            lastTime: 0,
            lastX: 0,
            lastY: 0
        };

        this.baseRgb = this.hexToRgb(this.baseColor);
        this.activeRgb = this.hexToRgb(this.activeColor);

        this.init();
    }

    hexToRgb(hex) {
        const m = hex.match(/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i);
        if (!m) return { r: 0, g: 0, b: 0 };
        return {
            r: parseInt(m[1], 16),
            g: parseInt(m[2], 16),
            b: parseInt(m[3], 16)
        };
    }

    init() {
        // Create Canvas
        this.canvas = document.createElement('canvas');
        this.canvas.className = 'dot-grid__canvas';
        this.container.appendChild(this.canvas);
        this.ctx = this.canvas.getContext('2d');

        this.circlePath = new Path2D();
        this.circlePath.arc(0, 0, this.dotSize / 2, 0, Math.PI * 2);

        this.buildGrid();
        this.bindEvents();
        this.render();
    }

    buildGrid() {
        const { width, height } = this.container.getBoundingClientRect();
        const dpr = window.devicePixelRatio || 1;

        this.canvas.width = width * dpr;
        this.canvas.height = height * dpr;
        this.canvas.style.width = `${width}px`;
        this.canvas.style.height = `${height}px`;
        this.ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

        const cols = Math.floor((width + this.gap) / (this.dotSize + this.gap));
        const rows = Math.floor((height + this.gap) / (this.dotSize + this.gap));
        const cell = this.dotSize + this.gap;

        const gridW = cell * cols - this.gap;
        const gridH = cell * rows - this.gap;

        const extraX = width - gridW;
        const extraY = height - gridH;

        const startX = extraX / 2 + this.dotSize / 2;
        const startY = extraY / 2 + this.dotSize / 2;

        this.dots = [];
        for (let y = 0; y < rows; y++) {
            for (let x = 0; x < cols; x++) {
                const cx = startX + x * cell;
                const cy = startY + y * cell;
                this.dots.push({ cx, cy, xOffset: 0, yOffset: 0, _inertiaApplied: false });
            }
        }
    }

    bindEvents() {
        window.addEventListener('resize', () => this.buildGrid());
        
        const throttle = (func, limit) => {
            let lastCall = 0;
            return function (...args) {
                const now = performance.now();
                if (now - lastCall >= limit) {
                    lastCall = now;
                    func.apply(this, args);
                }
            };
        };

        const onMove = e => {
            const now = performance.now();
            const pr = this.pointer;
            const dt = pr.lastTime ? now - pr.lastTime : 16;
            const dx = e.clientX - pr.lastX;
            const dy = e.clientY - pr.lastY;
            let vx = (dx / (dt || 1)) * 1000;
            let vy = (dy / (dt || 1)) * 1000;
            let speed = Math.hypot(vx, vy);

            if (speed > this.maxSpeed) {
                const scale = this.maxSpeed / speed;
                vx *= scale;
                vy *= scale;
                speed = this.maxSpeed;
            }

            pr.lastTime = now;
            pr.lastX = e.clientX;
            pr.lastY = e.clientY;
            pr.vx = vx;
            pr.vy = vy;
            pr.speed = speed;

            const rect = this.canvas.getBoundingClientRect();
            pr.x = e.clientX - rect.left;
            pr.y = e.clientY - rect.top;

            for (const dot of this.dots) {
                const dist = Math.hypot(dot.cx - pr.x, dot.cy - pr.y);
                if (speed > this.speedTrigger && dist < this.proximity && !dot._inertiaApplied) {
                    this.applyInertia(dot, pr.x, pr.y, vx, vy);
                }
            }
        };

        const onClick = e => {
            const rect = this.canvas.getBoundingClientRect();
            const cx = e.clientX - rect.left;
            const cy = e.clientY - rect.top;
            for (const dot of this.dots) {
                const dist = Math.hypot(dot.cx - cx, dot.cy - cy);
                if (dist < this.shockRadius && !dot._inertiaApplied) {
                    const falloff = Math.max(0, 1 - dist / this.shockRadius);
                    const pushX = (dot.cx - cx) * this.shockStrength * falloff;
                    const pushY = (dot.cy - cy) * this.shockStrength * falloff;
                    this.applyInertia(dot, cx, cy, pushX * 100, pushY * 100); // Scale up for "velocity"
                }
            }
        };

        const throttledMove = throttle(onMove, 30);
        window.addEventListener('mousemove', throttledMove, { passive: true });
        window.addEventListener('click', onClick);
    }

    applyInertia(dot, px, py, vx, vy) {
        if (typeof gsap === 'undefined') return;
        
        dot._inertiaApplied = true;
        gsap.killTweensOf(dot);

        // Calculate a gentle repel vector
        const dx = dot.cx - px;
        const dy = dot.cy - py;
        const dist = Math.hypot(dx, dy);
        
        // Base repel distance (max 15px)
        const repelForce = (1 - dist / this.proximity) * 15;
        let targetX = (dx / (dist || 1)) * repelForce + (vx * 0.002);
        let targetY = (dy / (dist || 1)) * repelForce + (vy * 0.002);

        // Clamp to prevent scattering
        const maxOffset = 18;
        targetX = Math.max(-maxOffset, Math.min(maxOffset, targetX));
        targetY = Math.max(-maxOffset, Math.min(maxOffset, targetY));

        // Use a single cohesive tween
        gsap.to(dot, {
            xOffset: targetX,
            yOffset: targetY,
            duration: 0.3,
            ease: "power2.out",
            onComplete: () => {
                gsap.to(dot, {
                    xOffset: 0,
                    yOffset: 0,
                    duration: 1.2,
                    ease: "elastic.out(1, 0.8)",
                    onComplete: () => {
                        dot._inertiaApplied = false;
                    }
                });
            }
        });
    }

    returnToOrigin(dot) {
        // Handled inside applyInertia for better sequencing
    }

    render() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        const { x: px, y: py } = this.pointer;
        const proxSq = this.proximity * this.proximity;

        for (const dot of this.dots) {
            const ox = dot.cx + dot.xOffset;
            const oy = dot.cy + dot.yOffset;
            const dx = dot.cx - px;
            const dy = dot.cy - py;
            const dsq = dx * dx + dy * dy;

            let fillStyle = this.baseColor;
            if (dsq <= proxSq) {
                const dist = Math.sqrt(dsq);
                const t = 1 - dist / this.proximity;
                const r = Math.round(this.baseRgb.r + (this.activeRgb.r - this.baseRgb.r) * t);
                const g = Math.round(this.baseRgb.g + (this.activeRgb.g - this.baseRgb.g) * t);
                const b = Math.round(this.baseRgb.b + (this.activeRgb.b - this.baseRgb.b) * t);
                fillStyle = `rgb(${r},${g},${b})`;
            }

            this.ctx.save();
            this.ctx.translate(ox, oy);
            this.ctx.fillStyle = fillStyle;
            this.ctx.fill(this.circlePath);
            this.ctx.restore();
        }

        requestAnimationFrame(() => this.render());
    }
}

// Export for use in main.js
window.DotGrid = DotGrid;
