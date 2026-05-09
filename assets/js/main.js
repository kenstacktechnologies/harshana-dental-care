// =====================================================
// DENTAL CARE - Main JavaScript
// GSAP + Vanilla JS Interactions
// =====================================================

document.addEventListener('DOMContentLoaded', function () {

    // ---- GSAP Registration ----
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        initGSAP();
    }

    // ---- Core Init ----
    initHeroCarousel();
    initNavbar();
    initMobileMenu();
    initScrollTop();
    initCounters();
    initBeforeAfter();
    initConsultationForm();
    initVideoModal();
    initGalleryLightbox();
    initTreatmentsCarousel();
    initReviewsCarousel();

    initBlogFilters();

    // =====================================================
    // GSAP ANIMATIONS
    // =====================================================
    function initGSAP() {
        // Hero Modern Entry Animation
        if (document.querySelector('#hero-premium')) {
            const heroTl = gsap.timeline({ delay: 0.2 });
            heroTl
                .from('.hero-main-title h1', { opacity: 0, x: -80, duration: 1.2, ease: 'power4.out' })
                .from('.hero-modern-desc', { opacity: 0, y: 30, duration: 0.8, ease: 'power3.out' }, '-=0.9')
                .from('.hero-cta-group', { opacity: 0, y: 30, duration: 0.8, ease: 'power3.out' }, '-=0.7')
                .from('.hero-visual-stage', { opacity: 0, scale: 0.85, x: 50, duration: 1.3, ease: 'power4.out' }, '-=1.1')
                .from('.glass-overlay', { opacity: 0, scale: 0.7, y: 40, stagger: 0.3, duration: 1, ease: 'back.out(1.7)' }, '-=0.8')
                .from('.stat-pill', { opacity: 0, y: 50, stagger: 0.2, duration: 0.8, ease: 'power3.out' }, '-=0.5');
        }


        // Scroll-triggered sections
        gsap.utils.toArray('.treatment-card').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: { trigger: card, start: 'top 88%', toggleActions: 'play none none none' },
                opacity: 0, y: 40, duration: 0.65, delay: (i % 4) * 0.1, ease: 'power3.out'
            });
        });

        gsap.from('.ba-grid .ba-content', {
            scrollTrigger: { trigger: '.ba-grid', start: 'top 80%' },
            opacity: 0, x: -50, duration: 0.8, ease: 'power3.out'
        });
        gsap.from('.ba-slider-wrap', {
            scrollTrigger: { trigger: '.ba-grid', start: 'top 80%' },
            opacity: 0, x: 50, duration: 0.8, ease: 'power3.out'
        });

        gsap.utils.toArray('.stat-item').forEach((el, i) => {
            gsap.from(el, {
                scrollTrigger: { trigger: el, start: 'top 85%' },
                opacity: 0, scale: 0.9, duration: 0.6, delay: i * 0.1, ease: 'back.out(1.5)'
            });
        });

        gsap.utils.toArray('.testimonial-card').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: { trigger: card, start: 'top 88%' },
                opacity: 0, y: 40, duration: 0.65, delay: i * 0.12, ease: 'power3.out'
            });
        });

        gsap.from('.cta-banner', {
            scrollTrigger: { trigger: '.cta-banner', start: 'top 82%' },
            opacity: 0, y: 40, scale: 0.97, duration: 0.8, ease: 'power3.out'
        });

        gsap.utils.toArray('.gallery-item').forEach((item, i) => {
            gsap.from(item, {
                scrollTrigger: { trigger: item, start: 'top 90%' },
                opacity: 0, scale: 0.92, duration: 0.6, delay: i * 0.08, ease: 'power3.out'
            });
        });

        gsap.from('.form-card', {
            scrollTrigger: { trigger: '.form-card', start: 'top 82%' },
            opacity: 0, y: 40, duration: 0.8, ease: 'power3.out'
        });

        gsap.utils.toArray('.blog-card').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: { trigger: card, start: 'top 90%' },
                opacity: 0, y: 35, duration: 0.6, delay: i * 0.1, ease: 'power3.out'
            });
        });

        gsap.utils.toArray('.service-full-card').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: { trigger: card, start: 'top 90%' },
                opacity: 0, y: 35, duration: 0.6, delay: (i % 3) * 0.1, ease: 'power3.out'
            });
        });

        gsap.utils.toArray('.team-card').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: { trigger: card, start: 'top 90%' },
                opacity: 0, y: 35, duration: 0.6, delay: (i % 3) * 0.12, ease: 'power3.out'
            });
        });

        // Section headings
        gsap.utils.toArray('.section-head').forEach(el => {
            gsap.from(el, {
                scrollTrigger: { trigger: el, start: 'top 88%' },
                opacity: 0, y: 30, duration: 0.7, ease: 'power3.out'
            });
        });

        // Page hero
        if (document.querySelector('.page-hero')) {
            gsap.from('.page-hero h1', { opacity: 0, y: 30, duration: 0.8, delay: 0.2, ease: 'power3.out' });
            gsap.from('.page-hero p', { opacity: 0, y: 20, duration: 0.7, delay: 0.4, ease: 'power3.out' });
        }

        // Consultation info benefits
        gsap.utils.toArray('.benefit-item').forEach((item, i) => {
            gsap.from(item, {
                scrollTrigger: { trigger: item, start: 'top 88%' },
                opacity: 0, x: -20, duration: 0.55, delay: i * 0.12, ease: 'power3.out'
            });
        });

        // Contact items
        gsap.utils.toArray('.contact-item').forEach((item, i) => {
            gsap.from(item, {
                scrollTrigger: { trigger: item, start: 'top 88%' },
                opacity: 0, x: -25, duration: 0.55, delay: i * 0.12, ease: 'power3.out'
            });
        });

        // vm-cards
        gsap.utils.toArray('.vm-card').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: { trigger: card, start: 'top 88%' },
                opacity: 0, y: 30, duration: 0.65, delay: i * 0.15, ease: 'power3.out'
            });
        });
    }

    // =====================================================
    // NAVBAR
    // =====================================================
    function initNavbar() {
        const header = document.getElementById('header');
        if (!header) return;
        window.addEventListener('scroll', function () {
            if (window.scrollY > 40) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }, { passive: true });
    }

    // =====================================================
    // MOBILE MENU
    // =====================================================
    function initMobileMenu() {
        const hamburger = document.querySelector('.nav-hamburger');
        const mobileMenu = document.querySelector('.mobile-menu');
        const closeBtn = document.querySelector('.mobile-menu-close');
        if (!hamburger || !mobileMenu) return;

        hamburger.addEventListener('click', function () {
            hamburger.classList.toggle('open');
            mobileMenu.classList.toggle('open');
            document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
        });
        if (closeBtn) {
            closeBtn.addEventListener('click', function () {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            });
        }
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            });
        });
    }

    // =====================================================
    // BACK TO TOP
    // =====================================================
    function initScrollTop() {
        const btn = document.getElementById('back-to-top');
        if (!btn) return;
        window.addEventListener('scroll', function () {
            btn.classList.toggle('visible', window.scrollY > 400);
        }, { passive: true });
        btn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // =====================================================
    // ANIMATED COUNTERS
    // =====================================================
    function initCounters() {
        const counters = document.querySelectorAll('.stat-number[data-count]');
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const suffix = counter.getAttribute('data-suffix') || '';
            let started = false;

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !started) {
                        started = true;
                        animateCounter(counter, target, suffix);
                    }
                });
            }, { threshold: 0.5 });
            observer.observe(counter);
        });
    }

    function animateCounter(el, target, suffix) {
        const duration = 2000;
        const start = performance.now();
        const initialValue = 0;

        function update(currentTime) {
            const elapsed = currentTime - start;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.round(initialValue + (target - initialValue) * eased);
            el.textContent = current.toLocaleString() + suffix;
            if (progress < 1) requestAnimationFrame(update);
        }
        requestAnimationFrame(update);
    }

    // =====================================================
    // BEFORE / AFTER SLIDER
    // =====================================================
    function initBeforeAfter() {
        const container = document.querySelector('.ba-container');
        if (!container) return;
        const afterImg = container.querySelector('.ba-img-after');
        const divider = container.querySelector('.ba-divider');
        let isDragging = false;

        function setPosition(x) {
            const rect = container.getBoundingClientRect();
            const pos = Math.max(0, Math.min(1, (x - rect.left) / rect.width));
            const pct = pos * 100;
            afterImg.style.clipPath = `inset(0 ${100 - pct}% 0 0)`;
            divider.style.left = pct + '%';
        }

        container.addEventListener('mousedown', e => { isDragging = true; setPosition(e.clientX); });
        window.addEventListener('mouseup', () => { isDragging = false; });
        window.addEventListener('mousemove', e => { if (isDragging) setPosition(e.clientX); });
        container.addEventListener('touchstart', e => { isDragging = true; setPosition(e.touches[0].clientX); }, { passive: true });
        window.addEventListener('touchend', () => { isDragging = false; });
        window.addEventListener('touchmove', e => { if (isDragging) setPosition(e.touches[0].clientX); }, { passive: true });

        // BA tabs
        document.querySelectorAll('.ba-tab').forEach(tab => {
            tab.addEventListener('click', function () {
                document.querySelectorAll('.ba-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                const before = this.dataset.before;
                const after = this.dataset.after;
                if (before) container.querySelector('.ba-img-before').src = before;
                if (after) container.querySelector('.ba-img-after').src = after;
                setPosition(container.getBoundingClientRect().left + container.getBoundingClientRect().width / 2);
            });
        });
    }

    // =====================================================
    // CONSULTATION MULTI-STEP FORM
    // =====================================================
    function initConsultationForm() {
        const form = document.getElementById('consultationForm');
        if (!form) return;

        let currentStep = 1;
        const totalSteps = 3;

        function updateSteps() {
            // Update step dots
            form.querySelectorAll('.form-step-dot').forEach((dot, i) => {
                const stepNum = i + 1;
                dot.classList.remove('active', 'done');
                if (stepNum === currentStep) dot.classList.add('active');
                if (stepNum < currentStep) { dot.classList.add('done'); dot.innerHTML = '<i class="fa-solid fa-check"></i>'; }
                else dot.textContent = stepNum;
            });
            // Update step lines
            form.querySelectorAll('.form-step-line').forEach((line, i) => {
                line.classList.toggle('done', i + 1 < currentStep);
            });
            // Show/hide panels
            form.querySelectorAll('.step-panel').forEach((panel, i) => {
                panel.classList.toggle('active', i + 1 === currentStep);
            });
        }

        // Next buttons
        form.querySelectorAll('[data-next]').forEach(btn => {
            btn.addEventListener('click', function () {
                if (validateStep(currentStep)) {
                    if (currentStep < totalSteps) {
                        currentStep = currentStep + 1;
                        updateSteps();
                    } else {
                        // Final step — WhatsApp Redirection
                        const firstName = form.querySelector('[name="first_name"]').value;
                        const lastName = form.querySelector('[name="last_name"]').value;
                        const phone = form.querySelector('[name="phone"]').value;
                        const email = form.querySelector('[name="email"]').value;
                        const age = form.querySelector('[name="age_group"]').value;
                        const date = form.querySelector('[name="pref_date"]').value;
                        const time = form.querySelector('[name="pref_time"]').value;
                        const source = form.querySelector('[name="source"]').value;
                        const messageText = form.querySelector('[name="message"]').value;
                        
                        const selectedTreatments = [];
                        form.querySelectorAll('.select-option-card.selected span').forEach(s => selectedTreatments.push(s.textContent.trim()));
                        const treatments = selectedTreatments.join(', ');

                        const waNumber = "917639123754"; 
                        const waMessage = `*New Consultation Request (Website)*\n\n` +
                            `*Name:* ${firstName} ${lastName}\n` +
                            `*Phone:* ${phone}\n` +
                            `*Email:* ${email}\n` +
                            `*Age Group:* ${age}\n` +
                            `*Treatments:* ${treatments}\n` +
                            `*Preferred Date:* ${date}\n` +
                            `*Preferred Time:* ${time}\n` +
                            `*Source:* ${source}\n` +
                            `*Message:* ${messageText}`;

                        const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(waMessage)}`;
                        
                        // Show success state and redirect
                        form.querySelectorAll('.step-panel').forEach(p => p.classList.remove('active'));
                        const successEl = form.querySelector('.form-success');
                        if (successEl) {
                            successEl.style.display = 'block';
                            successEl.innerHTML = `
                                <div class="form-success-icon"><i class="fa-solid fa-whatsapp"></i></div>
                                <h3>Redirecting to WhatsApp...</h3>
                                <p>Thank you! Your details are ready. Please send the pre-filled message on WhatsApp to confirm your booking.</p>
                                <a href="${waUrl}" target="_blank" class="btn btn-primary" style="margin-top:20px; background:#25D366; border-color:#25D366;">
                                    <i class="fa-brands fa-whatsapp"></i> Open WhatsApp Now
                                </a>
                            `;
                        }
                        
                        // Small delay then open
                        setTimeout(() => {
                            window.open(waUrl, '_blank');
                        }, 1500);
                    }
                }
            });
        });

        // Back buttons
        form.querySelectorAll('[data-back]').forEach(btn => {
            btn.addEventListener('click', function () {
                currentStep = Math.max(currentStep - 1, 1);
                updateSteps();
            });
        });

        // Select option cards
        form.querySelectorAll('.select-option-card').forEach(card => {
            card.addEventListener('click', function () {
                this.classList.toggle('selected');
            });
        });

        function validateStep(step) {
            const panel = form.querySelector(`.step-panel[data-step="${step}"]`);
            if (!panel) return true;
            let valid = true;
            panel.querySelectorAll('[required]').forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = '#EF4444';
                    valid = false;
                    setTimeout(() => { field.style.borderColor = ''; }, 2500);
                }
            });
            return valid;
        }

        updateSteps();
    }

    // =====================================================
    // VIDEO MODAL
    // =====================================================
    function initVideoModal() {
        const modal = document.getElementById('videoModal');
        if (!modal) return;
        const video = modal.querySelector('video');

        document.querySelectorAll('[data-video]').forEach(btn => {
            btn.addEventListener('click', function () {
                modal.classList.add('open');
                document.body.style.overflow = 'hidden';
                if (video) video.play();
            });
        });

        const closeBtn = modal.querySelector('.video-modal-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', function () {
                modal.classList.remove('open');
                document.body.style.overflow = '';
                if (video) { video.pause(); video.currentTime = 0; }
            });
        }

        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.remove('open');
                document.body.style.overflow = '';
                if (video) { video.pause(); video.currentTime = 0; }
            }
        });

        // Play hero video button
        const playHero = document.querySelector('[data-play-hero]');
        if (playHero) {
            playHero.addEventListener('click', function () {
                modal.classList.add('open');
                document.body.style.overflow = 'hidden';
                if (video) video.play();
            });
        }
    }

    // =====================================================
    // GALLERY LIGHTBOX
    // =====================================================
    function initGalleryLightbox() {
        // Support both old and new gallery item classes
        const items = document.querySelectorAll('.gallery-item, .bento-gallery-item');
        if (!items.length) return;
        
        // Check if lightbox already exists to avoid duplicates
        if (document.getElementById('lightbox')) return;

        const lb = document.createElement('div');
        lb.innerHTML = `<div id="lightbox" style="position:fixed;inset:0;background:rgba(0,0,0,0.92);z-index:9999;display:none;align-items:center;justify-content:center;backdrop-filter:blur(8px);">
      <button id="lb-close" style="position:absolute;top:20px;right:20px;background:rgba(255,255,255,0.15);border:none;color:white;width:44px;height:44px;border-radius:50%;font-size:20px;cursor:pointer;display:flex;align-items:center;justify-content:center;z-index:10001;"><i class="fa-solid fa-xmark"></i></button>
      <img id="lb-img" src="" style="max-width:90vw;max-height:85vh;border-radius:12px;object-fit:contain;box-shadow: 0 20px 50px rgba(0,0,0,0.5);" />
    </div>`;
        document.body.appendChild(lb);

        const lightbox = document.getElementById('lightbox');
        const lbImg = document.getElementById('lb-img');
        const lbClose = document.getElementById('lb-close');

        items.forEach(item => {
            // Make them clickable
            item.style.cursor = 'pointer';
            
            item.addEventListener('click', function () {
                // Try data-img first, then look for an inner img src
                let imgSrc = this.dataset.img;
                if (!imgSrc) {
                    const innerImg = this.querySelector('img');
                    if (innerImg) imgSrc = innerImg.src;
                }
                
                if (imgSrc) {
                    lbImg.src = imgSrc;
                    lightbox.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        lbClose.addEventListener('click', () => { lightbox.style.display = 'none'; document.body.style.overflow = ''; });
        lightbox.addEventListener('click', e => { if (e.target === lightbox) { lightbox.style.display = 'none'; document.body.style.overflow = ''; } });
        document.addEventListener('keydown', e => { if (e.key === 'Escape' && lightbox.style.display === 'flex') { lightbox.style.display = 'none'; document.body.style.overflow = ''; } });
    }



    // =====================================================
    // BLOG FILTERS
    // =====================================================
    function initBlogFilters() {
        const filterBtns = document.querySelectorAll('.blog-filter-btn');
        const blogCards = document.querySelectorAll('.blog-card');
        if (!filterBtns.length) return;

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                const filter = this.dataset.filter;
                blogCards.forEach(card => {
                    if (filter === 'all' || card.dataset.cat === filter) {
                        card.style.display = 'flex';
                        gsap.from(card, { opacity: 0, y: 20, duration: 0.4, ease: 'power2.out' });
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // Contact form is now handled per-page with real AJAX (see contact.php inline script)

    // =====================================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // =====================================================
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const offset = 90;
                const top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    function initHeroCarousel() {
        const carousel = document.getElementById('heroCarousel');
        const track = document.getElementById('carouselTrack');
        if (!carousel || !track) return;

        const slides = carousel.querySelectorAll('.carousel-slide');
        const dots = carousel.querySelectorAll('.dot');
        let currentIndex = 0;
        let interval;

        function showSlide(index) {
            if (index === currentIndex && dots[index].classList.contains('active')) return;

            // Update dots
            dots.forEach(d => d.classList.remove('active'));
            dots[index].classList.add('active');

            // Move track
            track.style.transform = `translateX(-${index * 100}%)`;
            currentIndex = index;
        }

        function nextSlide() {
            let next = (currentIndex + 1) % slides.length;
            showSlide(next);
        }

        function startAutoplay() {
            stopAutoplay();
            interval = setInterval(nextSlide, 5000);
        }

        function stopAutoplay() {
            if (interval) clearInterval(interval);
        }

        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                showSlide(i);
                startAutoplay();
            });
        });

        // Handle touch/swipe for mobile
        let touchStartX = 0;
        carousel.addEventListener('touchstart', e => touchStartX = e.changedTouches[0].screenX);
        carousel.addEventListener('touchend', e => {
            let touchEndX = e.changedTouches[0].screenX;
            if (touchStartX - touchEndX > 50) nextSlide();
            if (touchEndX - touchStartX > 50) showSlide((currentIndex - 1 + slides.length) % slides.length);
            startAutoplay();
        });

        carousel.addEventListener('mouseenter', stopAutoplay);
        carousel.addEventListener('mouseleave', startAutoplay);

        // Initial sync
        showSlide(0);
        startAutoplay();
    }
    function initTreatmentsCarousel() {
        const carousel = document.getElementById('treatmentsCarousel');
        const track = document.getElementById('treatmentsTrack');
        const dotsContainer = document.getElementById('treatmentsDots');
        if (!carousel || !track || !dotsContainer) return;

        const cards = track.querySelectorAll('.treatment-card');
        let currentIndex = 0;

        // Calculate how many items to show based on window width
        function getItemsPerView() {
            if (window.innerWidth <= 480) return 1;
            if (window.innerWidth <= 768) return 2;
            if (window.innerWidth <= 1100) return 3;
            return 4;
        }

        function updateCarousel() {
            const perView = getItemsPerView();
            const maxIndex = Math.ceil(cards.length / perView) - 1;
            if (currentIndex > maxIndex) currentIndex = maxIndex;

            const cardWidth = cards[0].offsetWidth;
            const gap = 20;
            const offset = currentIndex * (cardWidth + gap) * perView;
            track.style.transform = `translateX(-${offset}px)`;

            updateDots();
        }

        function createDots() {
            dotsContainer.innerHTML = '';
            const perView = getItemsPerView();
            const numDots = Math.ceil(cards.length / perView);
            for (let i = 0; i < numDots; i++) {
                const dot = document.createElement('div');
                dot.className = 'dot' + (i === currentIndex ? ' active' : '');
                dot.addEventListener('click', () => {
                    currentIndex = i;
                    updateCarousel();
                });
                dotsContainer.appendChild(dot);
            }
        }

        function updateDots() {
            const dots = dotsContainer.querySelectorAll('.dot');
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentIndex);
            });
        }

        window.addEventListener('resize', () => {
            createDots();
            updateCarousel();
        });

        // Touch support
        let touchStartX = 0;
        carousel.addEventListener('touchstart', e => touchStartX = e.changedTouches[0].screenX, { passive: true });
        carousel.addEventListener('touchend', e => {
            let touchEndX = e.changedTouches[0].screenX;
            const perView = getItemsPerView();
            const maxIndex = Math.ceil(cards.length / perView) - 1;

            if (touchStartX - touchEndX > 50) {
                if (currentIndex < maxIndex) {
                    currentIndex++;
                    updateCarousel();
                }
            }
            if (touchEndX - touchStartX > 50) {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                }
            }
        });

        createDots();
        updateCarousel();
    }

    function initReviewsCarousel() {
        const track = document.getElementById('reviewsTrack');
        const dotsContainer = document.getElementById('reviewsDots');
        if (!track || !dotsContainer) return;

        const cards = track.querySelectorAll('.review-card-mini');
        let currentIndex = 0;

        function getItemsPerView() {
            if (window.innerWidth <= 768) return 1;
            return cards.length; // Don't slide on desktop
        }

        function updateCarousel() {
            if (window.innerWidth > 768) {
                track.style.transform = '';
                return;
            }
            const offset = currentIndex * (track.offsetWidth + 16);
            track.style.transform = `translateX(-${offset}px)`;
            updateDots();
        }

        function createDots() {
            dotsContainer.innerHTML = '';
            if (window.innerWidth > 768) return;
            
            cards.forEach((_, i) => {
                const dot = document.createElement('div');
                dot.className = 'dot' + (i === currentIndex ? ' active' : '');
                dot.addEventListener('click', () => {
                    currentIndex = i;
                    updateCarousel();
                });
                dotsContainer.appendChild(dot);
            });
        }

        function updateDots() {
            const dots = dotsContainer.querySelectorAll('.dot');
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentIndex);
            });
        }

        window.addEventListener('resize', () => {
            createDots();
            updateCarousel();
        });

        // Touch support
        let touchStartX = 0;
        track.addEventListener('touchstart', e => touchStartX = e.changedTouches[0].screenX, { passive: true });
        track.addEventListener('touchend', e => {
            if (window.innerWidth > 768) return;
            let touchEndX = e.changedTouches[0].screenX;
            if (touchStartX - touchEndX > 50 && currentIndex < cards.length - 1) {
                currentIndex++;
                updateCarousel();
            }
            if (touchEndX - touchStartX > 50 && currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        createDots();
        updateCarousel();
    }
});