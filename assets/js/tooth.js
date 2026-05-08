/**
 * tooth.js
 * Anatomically Realistic 3D Molar Tooth
 * Harshana Dental Care – Hero Section
 */

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('tooth-3d-scene');
    if (!container) return;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(
        32, container.offsetWidth / container.offsetHeight, 0.1, 100
    );
    camera.position.set(0, 0.5, 8.5);

    const renderer = new THREE.WebGLRenderer({
        antialias: true, alpha: true,
        powerPreference: 'high-performance'
    });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.setSize(container.offsetWidth, container.offsetHeight);
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 1.15;
    container.appendChild(renderer.domElement);

    // ── Helpers ──
    const sm = (a, b, x) => {
        const t = Math.max(0, Math.min(1, (x - a) / (b - a)));
        return t * t * (3 - 2 * t);
    };
    const mix = (a, b, t) => a + (b - a) * t;
    const clp = (x, lo, hi) => Math.max(lo, Math.min(hi, x));
    const hash = (x, y) => {
        const n = Math.sin(x * 127.1 + y * 311.7) * 43758.5453;
        return n - Math.floor(n);
    };
    const noise2 = (x, y) => {
        const ix = Math.floor(x), iy = Math.floor(y);
        const fx = x - ix, fy = y - iy;
        const ux = fx * fx * (3 - 2 * fx), uy = fy * fy * (3 - 2 * fy);
        return mix(mix(hash(ix, iy), hash(ix + 1, iy), ux),
                   mix(hash(ix, iy + 1), hash(ix + 1, iy + 1), ux), uy);
    };

    // ── Lighting – dental studio ──
    scene.add(new THREE.HemisphereLight(0xffffff, 0xe8dcc8, 0.55));
    scene.add(new THREE.AmbientLight(0xfff8f2, 0.6));

    const key = new THREE.DirectionalLight(0xfff8f0, 2.5);
    key.position.set(4, 10, 6);
    scene.add(key);

    const fill = new THREE.DirectionalLight(0xe0e8ff, 1.2);
    fill.position.set(-6, 4, 5);
    scene.add(fill);

    const rim = new THREE.DirectionalLight(0xffffff, 1.6);
    rim.position.set(0, -3, -7);
    scene.add(rim);

    const top = new THREE.PointLight(0xffffff, 2.0, 18);
    top.position.set(0, 8, 3);
    scene.add(top);

    // ── Procedural texture ──
    function makeTexture() {
        const c = document.createElement('canvas');
        c.width = 128; c.height = 512;
        const ctx = c.getContext('2d');
        const g = ctx.createLinearGradient(0, 0, 0, 512);
        g.addColorStop(0.00, '#ffffff');
        g.addColorStop(0.06, '#fefcf6');
        g.addColorStop(0.18, '#f9f5ea');
        g.addColorStop(0.32, '#f4eedc');
        g.addColorStop(0.42, '#ede4c8');
        g.addColorStop(0.52, '#e6dbb8');
        g.addColorStop(0.65, '#dfd2a8');
        g.addColorStop(0.80, '#d8c89c');
        g.addColorStop(1.00, '#d0be90');
        ctx.fillStyle = g;
        ctx.fillRect(0, 0, 128, 512);
        for (let y = 0; y < 512; y += 2)
            for (let x = 0; x < 128; x += 2) {
                const n = (noise2(x * 0.06, y * 0.025) - 0.5);
                ctx.fillStyle = n > 0 ? 'rgba(255,255,248,0.03)' : 'rgba(180,160,120,0.03)';
                ctx.fillRect(x, y, 2, 2);
            }
        const tex = new THREE.CanvasTexture(c);
        tex.wrapS = tex.wrapT = THREE.ClampToEdgeWrapping;
        return tex;
    }

    const texMap = makeTexture();

    // ══════════════════════════════════════════
    //  BUILD ANATOMICAL MOLAR
    // ══════════════════════════════════════════
    function buildMolar() {
        const group = new THREE.Group();

        const mat = new THREE.MeshPhysicalMaterial({
            map: texMap,
            roughness: 0.14,
            metalness: 0.0,
            ior: 1.63,
            transmission: 0.012,
            thickness: 0.5,
            clearcoat: 0.9,
            clearcoatRoughness: 0.05,
            sheen: 0.3,
            sheenRoughness: 0.3,
            sheenColor: new THREE.Color(0xfff8ee),
            specularIntensity: 0.5,
            specularColor: new THREE.Color(0xfff0dd),
            side: THREE.DoubleSide,
        });

        const rootMat = new THREE.MeshPhysicalMaterial({
            map: texMap,
            roughness: 0.4,
            metalness: 0.0,
            clearcoat: 0.1,
            clearcoatRoughness: 0.35,
            sheen: 0.05,
            sheenColor: new THREE.Color(0xe0d0a0),
            side: THREE.DoubleSide,
        });

        // ─── CROWN ────────────────────────────
        const S = 128;
        const geo = new THREE.SphereGeometry(1.4, S, S);
        const P = geo.attributes.position;
        const U = geo.attributes.uv;
        const v = new THREE.Vector3();

        for (let i = 0; i < P.count; i++) {
            v.fromBufferAttribute(P, i);

            // Molar proportions: taller crown, slightly rectangular
            v.y *= 0.78;
            v.x *= 1.04;
            v.z *= 0.92;

            // Rounded-rectangular cross-section in upper crown
            if (v.y > -0.4) {
                const pw = 3.5;
                const nx = v.x / 1.55, nz = v.z / 1.35;
                const se = Math.pow(Math.abs(nx), pw) + Math.pow(Math.abs(nz), pw);
                if (se > 0.005) {
                    const f = 1.0 / Math.pow(se, 1 / pw);
                    const b = sm(-0.4, 0.1, v.y) * 0.3;
                    v.x *= mix(1, f, b);
                    v.z *= mix(1, f, b);
                }
            }

            // ── 5 Cusps ──
            if (v.y > 0.1) {
                const ch = sm(0.1, 0.7, v.y);
                const cusps = [
                    [0.48, 0.42, 0.32, 0.48],   // mesiobuccal
                    [-0.44, 0.42, 0.26, 0.44],   // distobuccal
                    [0.48, -0.46, 0.38, 0.50],   // mesiolingual (tallest)
                    [-0.44, -0.46, 0.34, 0.48],  // distolingual
                    [-0.78, 0.06, 0.18, 0.34]    // distal
                ];
                let tc = 0;
                for (const [cx, cz, h, w] of cusps) {
                    const d2 = (v.x - cx) ** 2 + (v.z - cz) ** 2;
                    tc += h * Math.exp(-d2 / (w * w));
                }
                v.y += tc * ch;

                // Central fossa
                const fd = v.x * v.x * 0.8 + v.z * v.z;
                v.y -= 0.15 * Math.exp(-fd / 0.12) * ch;
                // Mesial pit
                v.y -= 0.065 * Math.exp(-((v.x - 0.65) ** 2 + v.z * v.z) / 0.06) * ch;
                // Distal pit
                v.y -= 0.055 * Math.exp(-((v.x + 0.65) ** 2 + v.z * v.z) / 0.06) * ch;
                // Central groove (mesiodistal)
                v.y -= 0.10 * Math.exp(-v.z * v.z / 0.03) * ch;
                // Buccal groove
                if (v.z > 0) {
                    const bGd = Math.abs(v.x + 0.03);
                    v.y -= 0.05 * Math.exp(-(bGd * bGd) / 0.016) * ch * sm(0.1, 0.5, v.z);
                }
                // Lingual groove
                if (v.z < 0) {
                    const lGd = Math.abs(v.x + 0.06);
                    v.y -= 0.04 * Math.exp(-(lGd * lGd) / 0.016) * ch * sm(-0.1, -0.45, v.z);
                }
                // Marginal ridges
                v.y += 0.05 * Math.exp(-((v.x - 0.85) ** 2) / 0.04) * sm(0, 0.45, Math.abs(v.z)) * ch;
                v.y += 0.04 * Math.exp(-((v.x + 0.85) ** 2) / 0.04) * sm(0, 0.45, Math.abs(v.z)) * ch;
            }

            // Crown bulge (height of contour at equator)
            if (v.y > -0.35 && v.y < 0.25) {
                const bf = sm(-0.35, -0.05, v.y) * sm(0.25, -0.05, v.y);
                v.x *= 1 + bf * 0.06;
                v.z *= 1 + bf * 0.05;
            }

            // Cervical neck – smooth inward taper
            if (v.y < -0.15 && v.y > -0.65) {
                const nf = sm(-0.15, -0.50, v.y);
                v.x *= 1 - nf * 0.28;
                v.z *= 1 - nf * 0.26;
            }

            // Root trunk zone – further taper
            if (v.y < -0.55) {
                const rt = 1 - sm(-0.55, -1.0, v.y) * 0.45;
                v.x *= Math.max(rt, 0.30);
                v.z *= Math.max(rt, 0.30);
            }

            // Micro surface texture
            const sn = (noise2(v.x * 7 + v.y * 5, v.z * 7) - 0.5) * 0.01;
            v.x += sn;
            v.z += sn * 0.6;

            P.setXYZ(i, v.x, v.y, v.z);
            U.setXY(i, 0.5, clp(1 - (v.y + 1.2) / 2.6, 0, 1));
        }
        geo.computeVertexNormals();
        group.add(new THREE.Mesh(geo, mat));

        // ─── ROOTS ────────────────────────────
        function makeRoot(len, rBase, rTip, curvX, curvZ, sH, sR) {
            const rg = new THREE.CylinderGeometry(rTip, rBase, len, sR, sH, false);
            const rp = rg.attributes.position;
            const ru = rg.attributes.uv;
            for (let i = 0; i < rp.count; i++) {
                v.fromBufferAttribute(rp, i);
                const t = (v.y + len / 2) / len; // 0 at base, 1 at tip
                // Organic tapered profile
                const taper = mix(1, 0.08, Math.pow(1 - t, 0.6));
                v.x *= taper;
                v.z *= taper;
                // Gentle curvature
                const bend = Math.pow(1 - t, 2.5);
                v.x += curvX * bend;
                v.z += curvZ * bend;
                // Root concavities (fluting)
                const ang = Math.atan2(v.z, v.x);
                const cr = Math.sqrt(v.x * v.x + v.z * v.z);
                if (cr > 0.005) {
                    const fl = Math.sin(ang * 2) * 0.02 * (1 - t) * taper;
                    v.x += (v.x / cr) * fl;
                    v.z += (v.z / cr) * fl;
                }
                // organic roughness
                const rn = (noise2(ang * 5 + t * 10, t * 7) - 0.5) * 0.006 * taper;
                v.x += rn; v.z += rn;
                rp.setXYZ(i, v.x, v.y, v.z);
                ru.setXY(i, 0.5, clp(0.50 + (1 - t) * 0.50, 0, 1));
            }
            rg.computeVertexNormals();
            return rg;
        }

        // Mesial root – slightly wider, longer
        const mr = new THREE.Mesh(
            makeRoot(2.2, 0.38, 0.04, 0.10, 0.05, 36, 20), rootMat
        );
        mr.position.set(0.42, -1.55, 0);
        mr.rotation.z = -0.06;
        group.add(mr);

        // Distal root – narrower, slightly shorter
        const dr = new THREE.Mesh(
            makeRoot(2.0, 0.34, 0.035, -0.15, 0.03, 36, 20), rootMat
        );
        dr.position.set(-0.38, -1.48, 0);
        dr.rotation.z = 0.08;
        group.add(dr);

        // Small lingual root nub (3rd root hint)
        const lr = new THREE.Mesh(
            makeRoot(1.4, 0.22, 0.03, 0.03, -0.12, 24, 16), rootMat
        );
        lr.position.set(0.05, -1.30, -0.28);
        lr.rotation.x = 0.12;
        lr.rotation.z = 0.02;
        group.add(lr);

        return group;
    }

    const tooth = buildMolar();
    tooth.scale.set(1.35, 1.35, 1.35);
    scene.add(tooth);

    tooth.rotation.y = Math.PI / 4.5;
    tooth.rotation.x = 0.15;

    // ── Animate ──
    function animate() {
        requestAnimationFrame(animate);
        if (!window.isScrolling) tooth.rotation.y += 0.003;
        renderer.render(scene, camera);
    }
    animate();

    // ── Scroll ──
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: '#hero-premium',
                start: 'top top',
                end: 'bottom top',
                scrub: 1.2,
                onUpdate: (s) => { window.isScrolling = s.velocity !== 0; }
            }
        });
        tl.to(tooth.rotation, { x: Math.PI / 2.1, y: Math.PI * 1.3, ease: 'none' });
        tl.to(tooth.position, { y: 0.5, z: 1.2, ease: 'none' }, 0);
    }

    // ── Resize ──
    window.addEventListener('resize', () => {
        camera.aspect = container.offsetWidth / container.offsetHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.offsetWidth, container.offsetHeight);
    });

    // ── Mouse ──
    container.addEventListener('mousemove', (e) => {
        const r = container.getBoundingClientRect();
        const mx = ((e.clientX - r.left) / r.width) * 2 - 1;
        const my = -((e.clientY - r.top) / r.height) * 2 + 1;
        gsap.to(tooth.rotation, {
            x: tooth.rotation.x + my * 0.04,
            y: tooth.rotation.y + mx * 0.04,
            duration: 0.7, overwrite: 'auto'
        });
    });
});
