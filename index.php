<?php
$page_title = "Best Dentist in Dindigul | Harshana Dental Care";
$page_desc = "Looking for a trusted dentist in Dindigul? Harshana Dental Care offers pain-free treatments, advanced dental care, and affordable services for a healthy smile.";
include 'includes/header.php';
?>


<section id="hero-premium">
    <div class="hero-bg-blobs">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
    </div>

    <div class="container-wide">
        <div class="hero-premium-wrap">
            <div id="heroDotGrid" class="dot-grid"></div>
            <div class="floating-card card-2">
                <div class="card-icon"><i class="fa-solid fa-heart-pulse text-purple"></i></div>
                <div class="card-info">
                    <strong>Pain-Free</strong>
                    <span>Advanced Tech</span>
                </div>
            </div>

            <div class="hero-header-top">
                <h1 class="display-sm">
                    <span class="hero-line-1">Best Dentist in Dindigul</span>
                    <span class="hero-line-2 text-gradient">Harshana Dental Care</span>
                </h1>
                <div class="hero-grid-side">
                    <div class="hero-services-grid">
                        <?php
                        $grid_services = [
                            ['icon' => 'tooth1.png', 'link' => 'services.php#veneers', 'label' => 'Dental Veneers'],
                            ['icon' => 'tooth2.png', 'link' => 'services.php#root-canal', 'label' => 'Root Canal'],
                            ['icon' => 'tooth3.png', 'link' => 'services.php#whitening', 'label' => 'Teeth Whitening'],
                            ['icon' => 'tooth4.png', 'link' => 'services.php#extraction', 'label' => 'Tooth Extraction'],
                            ['icon' => 'tooth5.png', 'link' => 'services.php#wisdom-tooth', 'label' => 'Wisdom Tooth'],
                            ['icon' => 'tooth6.png', 'link' => 'services.php#implants', 'label' => 'Dental Implants'],
                            ['icon' => 'tooth7.png', 'link' => 'services.php#crowns', 'label' => 'Crowns and Bridges'],
                            ['icon' => 'tooth8.png', 'link' => 'services.php#orthodontics', 'label' => 'Dental Braces'],
                        ];
                        foreach ($grid_services as $gs): ?>
                            <a href="<?php echo $gs['link']; ?>" class="hero-grid-item">
                                <img src="assets/images/<?php echo $gs['icon']; ?>" alt="<?php echo $gs['label']; ?>">
                                <div class="grid-item-label"><?php echo $gs['label']; ?></div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>  

            
            <div class="hero-content-split">
                
                <div class="hero-visual-side">
                    <div class="hero-carousel" id="heroCarousel">
                        <div class="carousel-track" id="carouselTrack">
                            <?php
                            $slides = [
                                [
                                    'bg'   => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=900&q=80',
                                    'heading' => 'Trusted Dental Clinic in Dindigul',
                                    'desc' => 'Harshana Dental Care is a trusted dental clinic in Dindigul offering safe, hygienic, and advanced dental treatments for all your oral care needs.',
                                    'badge' => 'Safe & Hygienic',
                                ],
                                [
                                    'bg'   => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=900&q=80',
                                    'heading' => 'Experienced Dentist in Dindigul Since 2009',
                                    'desc' => 'Consult an experienced dentist in Dindigul since 2009 at Harshana Dental Care. We provide reliable, pain-free dental treatments with modern technology.',
                                    'badge' => '15+ Years Experience',
                                ],
                                [
                                    'bg'   => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=900&q=80',
                                    'heading' => 'Looking for a Dentist in Dindigul?',
                                    'desc' => 'Visit Harshana Dental Care for expert dental services, quick appointments, and affordable treatment options.',
                                    'badge' => 'Quick Appointments',
                                ],
                            ];
                            foreach ($slides as $index => $slide): ?>
                                <div class="carousel-slide hero-bg-slide" data-index="<?php echo $index; ?>"
                                     style="background-image: url('<?php echo $slide['bg']; ?>');">
                                    <div class="hero-slide-overlay"></div>
                                    <div class="hero-slide-content">
                                        <span class="hero-slide-badge"><?php echo $slide['badge']; ?></span>
                                        <h3 class="hero-slide-heading"><?php echo $slide['heading']; ?></h3>
                                        <p class="hero-slide-desc"><?php echo $slide['desc']; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="carousel-dots">
                            <?php foreach ($slides as $index => $slide): ?>
                                <span class="dot <?php echo $index === 0 ? 'active' : ''; ?>"
                                    data-slide="<?php echo $index; ?>"></span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    
                    <div class="floating-card card-1">
                        <div class="card-icon"><i class="fa-solid fa-star text-purple"></i></div>
                        <div class="card-info">
                            <strong>4.9/5 Rating</strong>
                            <span>on Google</span>
                        </div>
                    </div>
                </div>

                
                <div class="hero-text-side">
                    <p class="hero-v2-desc">Looking for a trusted dentist in Dindigul? Harshana Dental Care offers pain-free treatments, advanced dental care, and affordable services for a healthy smile.</p>

                    <div class="hero-cta-area">
                        <a href="contact.php" class="btn btn-primary btn-lg">
                             Book Consultation <i class="fa-solid fa-calendar-check"></i>
                        </a>
                        <button class="btn btn-outline btn-lg" data-play-hero>
                            <i class="fa-solid fa-play"></i> Watch Video
                        </button>
                    </div>

                    <div class="hero-stats-row">
                        <div class="hero-stat-item-v2">
                            <span class="stat-num">15+</span>
                            <span class="stat-label">Years of Expertise</span>
                        </div>
                        <div class="hero-stat-divider"></div>
                        <div class="hero-stat-item-v2">
                            <span class="stat-num">2400+</span>
                            <span class="stat-label">Happy Patients</span>
                        </div>
                    </div>
                </div>

               

                
            </div>
        </div>
    </div>
</section>


<section class="about-section section" id="about">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom: 50px;">
            <h2 class="section-title">Lead Dentist in Harshana</h2>
            <div class="section-divider"></div>
        </div>
        <div class="doctor-card">
            <div class="doctor-img">
                <img src="assets/images/profile_pic.png" alt="Dr. Saranyan Mathivanan – Founder & Lead Dentist">
            </div>
            <div class="doctor-content">
                <span class="doctor-badge">Expert Dentist</span>
                <h2>Dr. Saranyan Mathivanan</h2>
                <p class="doctor-role">Founder & Chief Dental Surgeon</p>
                <p class="doctor-bio">With over 15 years of clinical experience, Dr. Saranyan Mathivanan is recognized for his gentle approach and precision in complex dental procedures. Since establishing Harshana Dental Care in 2009, he has focused on bringing the latest dental technology to Dindigul, ensuring every patient receives painless and effective treatment.</p>
                
                <div class="doctor-stats">
                    <div class="doc-stat-item">
                        <div class="doc-stat-num">15+</div>
                        <div class="doc-stat-label">Years Experience</div>
                    </div>
                    <div class="doc-stat-item">
                        <div class="doc-stat-num">10k+</div>
                        <div class="doc-stat-label">Happy Patients</div>
                    </div>
                    <div class="doc-stat-item">
                        <div class="doc-stat-num">ISO</div>
                        <div class="doc-stat-label">Certified Clinic</div>
                    </div>
                </div>

                <div class="doctor-actions">
                    <a href="about.php" class="btn btn-primary">
                        <i class="fa-solid fa-circle-info"></i> Learn More About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="trust-marquee-section">
    <div class="marquee-track">
        <?php
        $items = [
            ['icon' => 'fa-solid fa-tooth', 'text' => 'Cosmetic Dentistry'],
            ['icon' => 'fa-solid fa-star', 'text' => '4.9 Google Rating'],
            ['icon' => 'fa-solid fa-teeth', 'text' => 'Dental Implants'],
            ['icon' => 'fa-solid fa-face-smile', 'text' => 'Smile Makeover'],
            ['icon' => 'fa-solid fa-shield-halved', 'text' => 'Pain-Free Treatment'],
            ['icon' => 'fa-solid fa-clock', 'text' => 'Same Day Appointments'],
            ['icon' => 'fa-solid fa-award', 'text' => 'Award-Winning Clinic'],
            ['icon' => 'fa-solid fa-microscope', 'text' => 'Advanced Technology'],
            ['icon' => 'fa-solid fa-hand-holding-heart', 'text' => 'Compassionate Care'],
            ['icon' => 'fa-solid fa-certificate', 'text' => 'ISO Certified'],
        ];
        
        $all = array_merge($items, $items);
        foreach ($all as $item): ?>
            <div class="marquee-item">
                <i class="<?php echo $item['icon']; ?>"></i>
                <span><?php echo $item['text']; ?></span>
                <span class="marquee-dot"></span>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<section class="treatments-section section" id="treatments">
    <div class="container">
        <div class="section-head text-center">
            <span class="eyebrow">Dr. Saranyan Mathivanan</span>
            <h2 class="display-md">Trusted Dental Clinic in Dindigul</h2>
            <p class="lead section-sub">Harshana Dental Care is a trusted dental clinic in Dindigul offering safe, hygienic, and advanced dental treatments for all your oral care needs.</p>
        </div>

        <div class="treatments-carousel" id="treatmentsCarousel">
            <div class="treatments-track" id="treatmentsTrack">
                <?php
                $treatments = [
                    ['icon' => 'fa-solid fa-tooth', 'title' => 'Dentist in Dindigul', 'desc' => 'Looking for a trusted dental clinic in Dindigul? Harshana Dental Care offers complete dental solutions with advanced technology and pain-free treatments.', 'link' => 'services.php'],
                    ['icon' => 'fa-solid fa-truck-medical', 'title' => 'Emergency Dental Care', 'desc' => 'Get immediate relief with emergency dental care in Dindigul at Harshana Dental Care for tooth pain and broken teeth.', 'link' => 'services.php'],
                    ['icon' => 'fa-solid fa-sun', 'title' => 'Teeth Cleaning & Whitening', 'desc' => 'Improve your smile with professional teeth cleaning and teeth whitening in Dindigul. We remove stains and plaque for a brighter smile.', 'link' => 'services.php'],
                    ['icon' => 'fa-solid fa-child', 'title' => 'Pediatric Dentist', 'desc' => 'Looking for a pediatric dentist in Dindigul? We provide gentle and friendly dental care for children in a safe environment.', 'link' => 'services.php'],
                    ['icon' => 'fa-solid fa-head-side-medical', 'title' => 'TMJ Disorder', 'desc' => 'Expert diagnosis and relief for temporomandibular joint pain, jaw clicking, and facial discomfort.', 'link' => 'services.php'],
                    ['icon' => 'fa-solid fa-fill-drip', 'title' => 'Teeth Fillings', 'desc' => 'Tooth-colored composite and ceramic fillings that restore function while blending seamlessly.', 'link' => 'services.php'],
                    ['icon' => 'fa-solid fa-syringe', 'title' => 'Painless Root Canal', 'desc' => 'Modern endodontic techniques with sedation ensure a comfortable, virtually pain-free root canal.', 'link' => 'services.php'],
                    ['icon' => 'fa-solid fa-circle-nodes', 'title' => 'Orthodontic Braces', 'desc' => 'Traditional metal, ceramic, and self-ligating braces for precise, effective teeth alignment results.', 'link' => 'services.php'],
                ];
                foreach ($treatments as $t): ?>
                    <a href="<?php echo $t['link']; ?>" class="treatment-card">
                        <div class="treatment-icon">
                            <i class="<?php echo $t['icon']; ?>"></i>
                        </div>
                        <h3><?php echo $t['title']; ?></h3>
                        <p><?php echo $t['desc']; ?></p>
                        <span class="treatment-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="carousel-dots" id="treatmentsDots"></div>
        </div>

        <div style="text-align:center; margin-top: 48px;">
            <a href="services.php" class="btn btn-outline btn-lg">
                <i class="fa-solid fa-grid-2"></i> View All Services
            </a>
        </div>
    </div>
</section>


<section class="before-after-section section" id="before-after">
    <div class="container">
        <div class="ba-grid">

            <div class="ba-content">
                <span class="eyebrow">Real Transformations</span>
                <h2 class="display-md">Why Choose Us - Harshana Dental Care</h2>
                <p class="ba-desc">Choosing the right dentist in Dindigul is important for your oral health. At Harshana Dental Care, we provide safe, comfortable, and advanced dental treatments tailored to every patient. As a trusted dental clinic in Dindigul, we focus on quality care, hygiene, and long-lasting results.</p>

                <div class="ba-tabs">
                    <button class="ba-tab active"
                        data-before="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=600&q=80"
                        data-after="https://images.unsplash.com/photo-1607689943930-af88c0a41073?w=600&q=80">
                        Veneers
                    </button>
                    <button class="ba-tab"
                        data-before="https://images.unsplash.com/photo-1609840114035-3c981b782dfe?w=600&q=80"
                        data-after="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=600&q=80">
                        Whitening
                    </button>
                    <button class="ba-tab"
                        data-before="https://images.unsplash.com/photo-1607689943930-af88c0a41073?w=600&q=80"
                        data-after="https://images.unsplash.com/photo-1609840114035-3c981b782dfe?w=600&q=80">
                        Aligners
                    </button>
                    <button class="ba-tab"
                        data-before="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=600&q=80"
                        data-after="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?w=600&q=80">
                        Implants
                    </button>
                </div>

                <ul style="margin-bottom:32px; display:flex; flex-direction:column; gap:12px;">
                    <?php $reasons = [
                        'Experienced Dentist in Dindigul Since 2009',
                        'Pain-Free Dental Treatments',
                        'Advanced Dental Technology',
                        'Hygienic & Safe Environment',
                        'Affordable Dental Care in Dindigul',
                        'Friendly & Supportive Staff',
                        'Quick Appointments & Emergency Care'
                    ];
                    foreach ($reasons as $r): ?>
                        <li style="display:flex;align-items:center;gap:10px;font-size:15px;font-weight:500;color:
                            <i class="fa-solid fa-circle-check" style="color:
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a href="
                    <i class="fa-solid fa-face-smile"></i> Start Your Transformation
                </a>
            </div>

            <div>
                <div class="ba-slider-wrap">
                    <div class="ba-container">
                        <img class="ba-img ba-img-before" src="assets/images/white_teeth.png"
                            alt="Before dental treatment" />
                        <img class="ba-img ba-img-after" src="assets/images/yellow_teeth.png"
                            alt="After dental treatment – beautiful smile transformation" />
                        <div class="ba-divider">
                            <div class="ba-handle">
                                <i class="fa-solid fa-arrows-left-right"></i>
                            </div>
                        </div>
                        <span class="ba-label ba-label-before">Before</span>
                        <span class="ba-label ba-label-after">After</span>
                    </div>
                </div>
                <p style="text-align:center;font-size:13px;color:
                    <i class="fa-solid fa-hand-pointer"></i> Drag slider to compare
                </p>
            </div>

        </div>
    </div>
</section>


<section class="stats-section section" id="stats">
    <div class="container">
        <div class="section-head text-center" style="margin-bottom:48px;">
            <span class="eyebrow" style="color:rgba(255,255,255,0.8);">Our Track Record</span>
            <h2 class="display-md" style="color:white;">Numbers That Speak<br>For Themselves</h2>
        </div>

        <div class="stats-inner">
            <?php
            $stats = [
                ['icon' => 'fa-solid fa-calendar-check', 'num' => '15', 'suffix' => '+', 'label' => 'Years of Excellence'],
                ['icon' => 'fa-solid fa-users', 'num' => '12000', 'suffix' => '+', 'label' => 'Patients Treated'],
                ['icon' => 'fa-solid fa-star', 'num' => '4', 'suffix' => '.9★', 'label' => 'Google Rating'],
                ['icon' => 'fa-solid fa-award', 'num' => '98', 'suffix' => '%', 'label' => 'Satisfaction Rate'],
            ];
            foreach ($stats as $s): ?>
                <div class="stat-item">
                    <div class="stat-icon"><i class="<?php echo $s['icon']; ?>"></i></div>
                    <div class="stat-number" data-count="<?php echo $s['num']; ?>"
                        data-suffix="<?php echo $s['suffix']; ?>"><?php echo $s['num'] . $s['suffix']; ?></div>
                    <div class="stat-label"><?php echo $s['label']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>

        </div>
</section>


<section class="testimonials-section section" id="testimonials">
    <div class="container">
        <div class="section-head text-center">
            <span class="eyebrow">Patient Stories</span>
            <h2 class="display-md">Hear From Our<br>Happy Patients</h2>
            <p class="lead section-sub">Real patients, real results. Watch how Harshana Dental Care transformed their
                smiles and boosted their confidence.</p>
        </div>

        <div class="testimonials-grid">
            <?php
            $testimonials = [
                [
                    'thumb' => 'assets/images/thumbnail.png',
                    'avatar' => 'assets/images/profile_pic.png',
                    'quote' => 'Absolutely transformed my smile! The team was so professional and caring throughout my treatment. Best dental experience I\'ve ever had.',
                    'name' => 'Verified Patient',
                    'treatment' => 'Dental Treatment',
                ]
            ];
            foreach ($testimonials as $t): ?>
                <div class="testimonial-card" style="max-width: 600px; margin: 0 auto;">
                    <div class="testimonial-thumb">
                        <img src="<?php echo $t['thumb']; ?>" alt="Patient testimonial video thumbnail" loading="lazy" />
                        <div class="testimonial-play">
                            <button class="testimonial-play-btn" data-video aria-label="Play testimonial video">
                                <i class="fa-solid fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="testimonial-body">
                        <div class="t-stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                        <p class="testimonial-quote"><?php echo $t['quote']; ?></p>
                        <div class="testimonial-author">
                            <img src="<?php echo $t['avatar']; ?>" alt="<?php echo $t['name']; ?>" />
                            <div>
                                <div class="testimonial-name"><?php echo $t['name']; ?></div>
                                <div class="testimonial-treatment"><?php echo $t['treatment']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        
        <div class="testimonials-text-grid">
            <?php
            $textReviews = [
                [
                    'initial' => 'R',
                    'name'    => 'Ramya Subha',
                    'label'   => 'Google Review',
                    'quote'   => 'I went with my sister in law for her root canal. Now she is very good without any side effects. Very caring and good service for her. Mr. Dr. Saranyan is very friendly and comfort with us. He did his service without painful with caring. I highly recommend this HARSANA DENTAL CLINIC in dindigul. Doctor is very polite and humble and down to earth. Very experience and gives us a clear explanation. Thankyou so much sir.',
                ],
                [
                    'initial' => 'C',
                    'name'    => 'Cheran Mart Budget Supermarket',
                    'label'   => '1 Review · Google',
                    'quote'   => 'One of my shop workers had a small accident and we took him to Harshana Dental Care for treatment. The way Dr. Saranyan handled the situation was really calm and caring. The doctor was very friendly and made my worker feel comfortable throughout. The clinic environment is clean and the staff cooperated kindly. The treatment was smooth, pain-less, and the doctor explained everything clearly. Charges were also reasonable for an emergency case. "Good, caring and friendly dental clinic in Dindigul. Kandippa recommend pannuvom."',
                ],
                [
                    'initial' => 'R',
                    'name'    => 'R.J. Pathuri',
                    'label'   => 'Google Review',
                    'quote'   => 'Last week I went for my wisdom teeth problem to Harshana clinic in Dindigul. They did very good service and doctors are very humble and friendly. Thanks to the Dr. Saranyan.',
                ],
            ];
            foreach ($textReviews as $r): ?>
                <div class="testimonial-text-card">
                    <div class="ttc-stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="ttc-quote">"<?php echo $r['quote']; ?>"</p>
                    <div class="ttc-author">
                        <div class="ttc-avatar"><?php echo $r['initial']; ?></div>
                        <div>
                            <div class="ttc-name"><?php echo $r['name']; ?></div>
                            <div class="ttc-label"><?php echo $r['label']; ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div style="text-align:center;margin-top:40px;">
            <a href="
                <i class="fa-solid fa-calendar-plus"></i> Book Your Transformation
            </a>
        </div>
    </div>
</section>


<section class="section-sm">
    <div class="container">
        <div class="cta-banner">
            <div class="cta-banner-content">
                <h2>Ready to Transform Your Smile?</h2>
                <p>Get a free consultation with our dental specialists. No obligation, just honest advice for a
                    healthier, more beautiful smile.</p>
            </div>
            <div class="cta-banner-btns">
                <a href="
                    <i class="fa-solid fa-calendar-check"></i> Book Free Consultation
                </a>
                <a href="tel:+917639123754" class="btn btn-lg"
                    style="background:rgba(255,255,255,0.15);color:white;border:2px solid rgba(255,255,255,0.4);">
                    <i class="fa-solid fa-phone"></i> Call Us Now
                </a>
            </div>
        </div>
    </div>
</section>


<section class="faq-section section" id="faq">
    <div class="container">
        <div class="section-head text-center">
            <span class="eyebrow">FAQ</span>
            <h2 class="display-md">Frequently Asked Questions</h2>
            <p class="lead section-sub">Common questions about our dental services in Dindigul.</p>
        </div>
        <div class="faq-grid" style="max-width: 800px; margin: 0 auto;">
            <?php
            $faqs = [
                [
                    'q' => 'Who is the best dentist in Dindigul?',
                    'a' => 'Harshana Dental Care is a trusted dentist in Dindigul offering quality dental care with advanced technology and pain-free treatments for all patients.'
                ],
                [
                    'q' => 'Which is the best dental clinic in Dindigul?',
                    'a' => 'Harshana Dental Care is a leading dental clinic in Dindigul known for hygienic environment, experienced dentist, and complete dental treatments.'
                ],
                [
                    'q' => 'Do you provide tooth pain treatment in Dindigul?',
                    'a' => 'Yes, we provide effective tooth pain treatment in Dindigul with quick diagnosis and advanced procedures to give fast relief.'
                ],
                [
                    'q' => 'Is teeth cleaning and whitening available in Dindigul?',
                    'a' => 'Yes, we offer professional teeth cleaning and teeth whitening in Dindigul to remove stains and improve your smile safely.'
                ],
                [
                    'q' => 'Do you offer emergency dental care in Dindigul?',
                    'a' => 'Yes, we provide emergency dental care in Dindigul for tooth pain, broken teeth, and urgent dental problems with immediate attention.'
                ]
            ];
            foreach ($faqs as $f): ?>
                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <?php echo $f['q']; ?>
                        <span class="faq-toggle"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner"><?php echo $f['a']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- <section class="gallery-section section" id="gallery">
    <div class="container">
        <div class="section-head text-center">
            <span class="eyebrow">Our Clinic</span>
            <h2 class="display-md">A Healing Space Designed<br>For Your Comfort</h2>
            <p class="lead section-sub">Step inside our modern, state-of-the-art dental facility designed to make every
                visit calm, comfortable and exceptional.</p>
        </div>

        <div class="gallery-grid">
            <?php
            $gallery = [
                ['src' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=800&q=80', 'label' => 'Modern Treatment Rooms'],
                ['src' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=600&q=80', 'label' => 'Advanced Dental Equipment'],
                ['src' => 'https://images.unsplash.com/photo-1670250492416-570b5b7343b1?q=80&w=1025&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'label' => 'Comfortable Patient Care'],
                ['src' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&q=80', 'label' => 'Reception & Waiting Area'],
                ['src' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&q=80', 'label' => 'Sterilization Lab'],
                ['src' => 'https://images.unsplash.com/photo-1607990283143-e81e7a2c9349?w=600&q=80', 'label' => 'Expert Dental Team'],
            ];
            foreach ($gallery as $g): ?>
                <div class="gallery-item" data-img="<?php echo $g['src']; ?>" role="button" tabindex="0"
                    aria-label="View <?php echo $g['label']; ?>">
                    <img src="<?php echo $g['src']; ?>" alt="<?php echo $g['label']; ?> – Harshana Dental Clinic"
                        loading="lazy" />
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-text"><i class="fa-solid fa-expand"></i> <?php echo $g['label']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> -->


<section class="consultation-section section" id="consultation">
    <div class="container">
        <div class="consultation-grid">

            
            <div class="consultation-info">
                <span class="eyebrow">Book Now</span>
                <h2 class="display-md">Schedule Your<br>Free Consultation</h2>
                <p>Take the first step toward your perfect smile. Our expert dental team will assess your needs and
                    create a personalized treatment plan — completely free, no obligation.</p>

                <div class="consultation-benefits">
                    <?php
                    $benefits = [
                        ['icon' => 'fa-solid fa-stethoscope', 'title' => 'Comprehensive Dental Assessment', 'desc' => 'Full oral health evaluation including digital X-rays and smile analysis.'],
                        ['icon' => 'fa-solid fa-file-prescription', 'title' => 'Personalized Treatment Plan', 'desc' => 'Custom roadmap outlining the best treatments for your specific needs and budget.'],
                        ['icon' => 'fa-solid fa-comments-dollar', 'title' => 'Transparent Pricing', 'desc' => 'Clear, upfront pricing with flexible financing options and insurance guidance.'],
                        ['icon' => 'fa-solid fa-clock', 'title' => 'Quick Response', 'desc' => 'Our team responds within 2 hours to confirm your appointment time.'],
                    ];
                    foreach ($benefits as $b): ?>
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="<?php echo $b['icon']; ?>"></i></div>
                            <div class="benefit-text">
                                <h4><?php echo $b['title']; ?></h4>
                                <p><?php echo $b['desc']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            
            <div class="form-card">

                
                <div class="form-steps">
                    <div class="form-step-item">
                        <div class="form-step-dot active">1</div>
                        <div class="form-step-line"></div>
                    </div>
                    <div class="form-step-item">
                        <div class="form-step-dot">2</div>
                        <div class="form-step-line"></div>
                    </div>
                    <div class="form-step-item">
                        <div class="form-step-dot">3</div>
                    </div>
                </div>
                <div class="form-steps-labels">
                    <span class="form-step-label">Your Info</span>
                    <span class="form-step-label">Treatment</span>
                    <span class="form-step-label">Schedule</span>
                </div>

                <form id="consultationForm" novalidate>

                    
                    <div class="step-panel active" data-step="1">
                        <h3 class="form-panel-title">Tell us about yourself</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">First Name *</label>
                                <input type="text" class="form-control" name="first_name" placeholder="John" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Last Name *</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Doe" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" class="form-control" name="email" placeholder="john@example.com" required />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-control" name="phone" placeholder="9876543210" required />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Age Group</label>
                            <select class="form-control" name="age_group">
                                <option value="">Select your age group</option>
                                <option>Under 18</option>
                                <option>18–30</option>
                                <option>31–45</option>
                                <option>46–60</option>
                                <option>60+</option>
                            </select>
                        </div>
                        <div class="form-nav">
                            <span></span>
                            <button type="button" class="btn btn-primary" data-next>
                                Next Step <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    
                    <div class="step-panel" data-step="2">
                        <h3 class="form-panel-title">What can we help you with?</h3>
                        <div class="form-group">
                            <label class="form-label" style="margin-bottom:14px;">Select Treatment(s) of
                                Interest</label>
                            <div class="select-options-grid">
                                <?php
                                $opts = [
                                    ['icon' => 'fa-solid fa-star', 'label' => 'Cosmetic Dentistry'],
                                    ['icon' => 'fa-solid fa-sun', 'label' => 'Teeth Whitening'],
                                    ['icon' => 'fa-solid fa-tooth', 'label' => 'Dental Implants'],
                                    ['icon' => 'fa-solid fa-teeth-open', 'label' => 'Invisible Aligners'],
                                    ['icon' => 'fa-solid fa-syringe', 'label' => 'Root Canal'],
                                    ['icon' => 'fa-solid fa-circle-nodes', 'label' => 'Orthodontics'],
                                    ['icon' => 'fa-solid fa-face-smile', 'label' => 'Smile Makeover'],
                                    ['icon' => 'fa-solid fa-child', 'label' => 'Pediatric Care'],
                                ];
                                foreach ($opts as $o): ?>
                                    <button type="button" class="select-option-card">
                                        <i class="<?php echo $o['icon']; ?>"></i>
                                        <span><?php echo $o['label']; ?></span>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top:20px;">
                            <label class="form-label">Describe your dental concern (optional)</label>
                            <textarea class="form-control" name="message" rows="3"
                                placeholder="e.g. I have gaps, discoloration, missing teeth..."></textarea>
                        </div>
                        <div class="form-nav">
                            <button type="button" class="form-nav-back" data-back>
                                <i class="fa-solid fa-arrow-left"></i> Back
                            </button>
                            <button type="button" class="btn btn-primary" data-next>
                                Next Step <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    
                    <div class="step-panel" data-step="3">
                        <h3 class="form-panel-title">Pick a convenient time</h3>
                        <div class="form-group">
                            <label class="form-label">Preferred Date *</label>
                            <input type="date" class="form-control" name="pref_date" required min="<?php echo date('Y-m-d'); ?>" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Preferred Time Slot</label>
                            <select class="form-control" name="pref_time">
                                <option value="">Choose a time</option>
                                <option>9:00 AM – 10:00 AM</option>
                                <option>10:00 AM – 11:00 AM</option>
                                <option>11:00 AM – 12:00 PM</option>
                                <option>12:00 PM – 1:00 PM</option>
                                <option>2:00 PM – 3:00 PM</option>
                                <option>3:00 PM – 4:00 PM</option>
                                <option>4:00 PM – 5:00 PM</option>
                                <option>5:00 PM – 6:00 PM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">How did you hear about us?</label>
                            <select class="form-control" name="source">
                                <option value="">Select an option</option>
                                <option>Google Search</option>
                                <option>Google Maps</option>
                                <option>Instagram / Facebook</option>
                                <option>Friend / Family Referral</option>
                                <option>YouTube</option>
                                <option>Walk-in / Signage</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div
                            style="background:var(--purple-glass);border-radius:10px;padding:14px 16px;margin-bottom:16px;display:flex;gap:10px;align-items:flex-start;">
                            <i class="fa-solid fa-circle-info" style="color:var(--purple);margin-top:2px;"></i>
                            <p style="font-size:13px;margin:0;">Your data is 100% private and secure. We'll contact you
                                within 2 hours to confirm your appointment.</p>
                        </div>
                        <div class="form-nav">
                            <button type="button" class="form-nav-back" data-back>
                                <i class="fa-solid fa-arrow-left"></i> Back
                            </button>
                            <button type="button" class="btn btn-primary btn-lg" data-next>
                                <i class="fa-solid fa-calendar-check"></i> Confirm Booking
                            </button>
                        </div>
                    </div>

                    
                    <div class="form-success">
                        <div class="form-success-icon"><i class="fa-solid fa-check"></i></div>
                        <h3>Consultation Booked!</h3>
                        <p>Thank you! Our team will contact you within 2 hours to confirm your appointment. We look
                            forward to creating your beautiful smile!</p>
                        <a href="index.php" class="btn btn-primary" style="margin-top:20px;">
                            <i class="fa-solid fa-home"></i> Back to Home
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>

<script>

document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', function() {
        const item = this.closest('.faq-item');
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    });
});
</script>

<script src="assets/js/dotgrid.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const heroContainer = document.getElementById('heroDotGrid');
    if (heroContainer) {
        new DotGrid(heroContainer, {
            dotSize: 4,
            gap: 16,
            baseColor: '#9B6BFF22', // Light purple base
            activeColor: '#C4B5FD',   // Soft Light Purple on hover
            proximity: 80,
            returnDuration: 1.2
        });
    }
});
</script>

<?php include 'includes/footer.php'; ?>

