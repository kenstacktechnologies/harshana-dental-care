<?php
$page_title = "Dental Services in Dindigul | Harshana Dental Care";
$page_desc  = "Comprehensive dental treatments in Dindigul. From root canals to implants, our expert team provides pain-free, advanced care for all your dental needs.";
include 'includes/header.php';

$all_services = [
    [
        'id' => 'dentist',
        'title' => 'Dentist in Dindigul',
        'eyebrow' => 'Expert Care',
        'desc' => 'Looking for the best dentist in Dindigul? Dr. Saranyan Mathivanan provides personalized dental solutions with over 15 years of experience, ensuring every patient receives the highest standard of oral care.',
        'img' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=800&q=80',
        'features' => ['Experienced specialist','Pain-free approach','Advanced diagnostics','Personalized care plans']
    ],
    [
        'id' => 'clinic',
        'title' => 'Dental Clinic in Dindigul',
        'eyebrow' => 'Modern Facility',
        'desc' => 'Our dental clinic in Dindigul is equipped with state-of-the-art technology and follows strict sterilization protocols to provide a safe and hygienic environment for your family.',
        'img' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=800&q=80',
        'features' => ['ISO certified hygiene','Digital X-rays','Comfortable waiting area','Ample parking space']
    ],
    [
        'id' => 'pain',
        'title' => 'Tooth Pain Treatment in Dindigul',
        'eyebrow' => 'Immediate Relief',
        'desc' => 'Severe toothache can be unbearable. We offer fast-acting tooth pain treatment in Dindigul to identify the root cause and provide instant relief through advanced sedative techniques.',
        'img' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?w=800&q=80',
        'features' => ['Emergency diagnosis','Quick pain relief','Deep infection clearing','Follow-up care']
    ],
    [
        'id' => 'emergency',
        'title' => 'Emergency Dental Care in Dindigul',
        'eyebrow' => '24/7 Support',
        'desc' => 'Accidents happen. Our emergency dental care in Dindigul ensures you get immediate attention for broken teeth, trauma, or sudden severe pain, any time of the day.',
        'img' => 'https://images.unsplash.com/photo-1598256989800-fe5f95da9787?w=800&q=80',
        'features' => ['Priority trauma care','Instant consultations','On-site imaging','Fast recovery protocols']
    ],
    [
        'id' => 'decay',
        'title' => 'Tooth Decay Treatment in Dindigul',
        'eyebrow' => 'Restorative Care',
        'desc' => 'Stop cavities before they spread. Our tooth decay treatment in Dindigul uses high-quality tooth-colored fillings and restorative procedures to save your natural teeth.',
        'img' => 'https://images.unsplash.com/photo-1609840114035-3c981b782dfe?w=800&q=80',
        'features' => ['Composite fillings','Ceramic inlays','BPA-free materials','Natural color matching']
    ],
    [
        'id' => 'cleaning',
        'title' => 'Teeth Cleaning in Dindigul',
        'eyebrow' => 'Oral Hygiene',
        'desc' => 'Maintain a healthy smile with professional teeth cleaning in Dindigul. Our scaling and polishing services remove stubborn plaque and tartar that regular brushing cannot reach.',
        'img' => 'https://images.unsplash.com/photo-1558227756-9796fe55a61e?w=800&q=80',
        'features' => ['Ultrasonic scaling','Air polishing','Gum health assessment','Fresh breath treatment']
    ],
    [
        'id' => 'whitening',
        'title' => 'Teeth Whitening in Dindigul',
        'eyebrow' => 'Bright Smile',
        'desc' => 'Get a dazzling smile with our teeth whitening in Dindigul. We use professional-grade bleaching systems that deliver dramatic results safely and effectively.',
        'img' => 'https://images.unsplash.com/photo-1473445361085-b9a07f55608b?w=800&q=80',
        'features' => ['Laser whitening','Custom home kits','Instant 8-shade lift','Safe for enamel']
    ],
    [
        'id' => 'checkup',
        'title' => 'Dental Check-up in Dindigul',
        'eyebrow' => 'Preventive Care',
        'desc' => 'Prevent problems before they start. A regular dental check-up in Dindigul includes oral cancer screening, cavity detection, and comprehensive gum evaluation.',
        'img' => 'https://images.unsplash.com/photo-1593022356769-11f09278a1a8?w=800&q=80',
        'features' => ['Full oral screening','Digital bite analysis','X-ray diagnostics','Dietary consultation']
    ],
    [
        'id' => 'root-canal',
        'title' => 'Root Canal Treatment in Dindigul',
        'eyebrow' => 'Endodontics',
        'desc' => 'Save your tooth from extraction. Our root canal treatment in Dindigul is performed using rotary technology, making the procedure painless and highly successful.',
        'img' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&q=80',
        'features' => ['Single-visit options','Rotary endodontics','Microscopic precision','Zero-pain technique']
    ],
    [
        'id' => 'extraction',
        'title' => 'Tooth Extraction in Dindigul',
        'eyebrow' => 'Safe Removal',
        'desc' => 'When a tooth cannot be saved, our tooth extraction in Dindigul provides a gentle and stress-free removal process, followed by expert socket preservation.',
        'img' => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=800&q=80',
        'features' => ['Atraumatic extraction','Sedation options','Socket grafting','Quick healing time']
    ],
    [
        'id' => 'wisdom',
        'title' => 'Wisdom Tooth Removal in Dindigul',
        'eyebrow' => 'Oral Surgery',
        'desc' => 'Impacted wisdom teeth can cause severe pain and infection. We specialize in surgical wisdom tooth removal in Dindigul with minimal post-operative discomfort.',
        'img' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?w=800&q=80',
        'features' => ['Impacted tooth expert','Piezo-surgery options','Laser-assisted healing','Detailed aftercare']
    ],
    [
        'id' => 'implants',
        'title' => 'Dental Implants in Dindigul',
        'eyebrow' => 'Implantology',
        'desc' => 'The permanent solution for missing teeth. Our dental implants in Dindigul offer a natural look and feel, restoring your ability to eat and speak with confidence.',
        'img' => 'https://images.unsplash.com/photo-1600170311833-c2cf5280ce49?w=800&q=80',
        'features' => ['Titanium implants','Basal implants','Computer-guided surgery','All-on-4 systems']
    ],
    [
        'id' => 'replacement',
        'title' => 'Tooth Replacement in Dindigul',
        'eyebrow' => 'Restore Function',
        'desc' => 'Multiple ways to restore your smile. Our tooth replacement in Dindigul includes bridges, partials, and modern implants tailored to your budget and needs.',
        'img' => 'https://images.unsplash.com/photo-1598256989800-fe5f95da9787?w=800&q=80',
        'features' => ['Fixed bridges','Removable partials','Implant integration','Bite restoration']
    ],
    [
        'id' => 'dentures',
        'title' => 'Dentures and Bridges in Dindigul',
        'eyebrow' => 'Prosthodontics',
        'desc' => 'High-quality, comfortable prosthetics. Our dentures and bridges in Dindigul are custom-designed to match your facial structure and natural gum color perfectly.',
        'img' => 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?w=800&q=80',
        'features' => ['BPS dentures','Flexible partials','Zirconia bridges','Perfect fit guarantee']
    ],
    [
        'id' => 'braces',
        'title' => 'Braces Treatment in Dindigul',
        'eyebrow' => 'Orthodontics',
        'desc' => 'Straighten your teeth at any age. Our braces treatment in Dindigul includes traditional metal, ceramic, and self-ligating options for precise alignment.',
        'img' => 'https://images.unsplash.com/photo-1591944033231-c12891217e54?w=800&q=80',
        'features' => ['Metal & Ceramic','Self-ligating braces','Lingual options','Fast-track results']
    ],
    [
        'id' => 'aligners',
        'title' => 'Clear Aligners in Dindigul',
        'eyebrow' => 'Invisible Ortho',
        'desc' => 'Straighten your teeth without wires. Our clear aligners in Dindigul offer a discreet, removable, and comfortable alternative to traditional metal braces.',
        'img' => 'https://images.unsplash.com/photo-1606811971618-4486d14f3f99?w=800&q=80',
        'features' => ['Virtually invisible','No food restrictions','Removable trays','Digital smile preview']
    ],
    [
        'id' => 'cosmetic',
        'title' => 'Cosmetic Dentistry in Dindigul',
        'eyebrow' => 'Smile Design',
        'desc' => 'Achieve your dream smile. Our cosmetic dentistry in Dindigul combines art and science to fix chips, gaps, and shape issues for a stunning transformation.',
        'img' => 'https://images.unsplash.com/photo-1516062423079-7ca13cdc7f5a?w=800&q=80',
        'features' => ['Smile makeovers','Gum contouring','Tooth reshaping','Aesthetic analysis']
    ],
    [
        'id' => 'veneers',
        'title' => 'Veneers and Crowns in Dindigul',
        'eyebrow' => 'Premium Finish',
        'desc' => 'The ultimate aesthetic upgrade. Our veneers and crowns in Dindigul use premium E-Max and Zirconia materials for a lifelike, durable, and beautiful finish.',
        'img' => 'https://images.unsplash.com/photo-1607689943930-af88c0a41073?w=800&q=80',
        'features' => ['Ultra-thin veneers','Zirconia crowns','Natural translucent finish','High durability']
    ],
    [
        'id' => 'rehab',
        'title' => 'Full Mouth Rehabilitation in Dindigul',
        'eyebrow' => 'Complex Restores',
        'desc' => 'Comprehensive rebuilding of your oral health. Full mouth rehabilitation in Dindigul addresses bite issues, worn teeth, and multiple dental problems simultaneously.',
        'img' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=800&q=80',
        'features' => ['Bite correction','Multi-specialty team','Phased treatment plan','Total transformation']
    ],
    [
        'id' => 'surgery',
        'title' => 'Oral Surgery in Dindigul',
        'eyebrow' => 'Surgical Care',
        'desc' => 'Expert surgical solutions. From bone grafting to complex cyst removals, our oral surgery in Dindigul is performed with precision and advanced healing support.',
        'img' => 'https://images.unsplash.com/photo-1591944033231-c12891217e54?w=800&q=80',
        'features' => ['Bone grafting','Sinus lifts','Cyst removals','Biopsy services']
    ],
    [
        'id' => 'laser',
        'title' => 'Laser Dentistry in Dindigul',
        'eyebrow' => 'Advanced Tech',
        'desc' => 'No-needle, no-drill dentistry. Laser dentistry in Dindigul offers precise gum treatments, cavity prep, and teeth whitening with faster healing and zero bleeding.',
        'img' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=800&q=80',
        'features' => ['Bloodless surgery','Instant healing','Silent procedure','No anesthesia needed']
    ],
    [
        'id' => 'pediatric',
        'title' => 'Pediatric Dentist in Dindigul',
        'eyebrow' => 'Kids Dentistry',
        'desc' => 'Special care for little smiles. Our pediatric dentist in Dindigul creates a friendly, fear-free environment to instill healthy habits and manage early dental issues.',
        'img' => 'https://images.unsplash.com/photo-1471333027242-0df10af379ae?w=800&q=80',
        'features' => ['Child-friendly clinic','Preventive sealants','Fluoride treatments','Early ortho screening']
    ],
];
?>
<link rel="stylesheet" href="assets/css/services.css" />

<section class="services-hero">
  <div class="container">
    <div class="services-hero-inner">
      <div class="services-hero-content">
        <span class="eyebrow">Our Expertise</span>
        <h1 class="display-lg">Comprehensive Dental<br><span>Services in Dindigul</span></h1>
        <p class="lead">At Harshana Dental Care, we provide advanced and pain-free treatments for every smile. From routine check-ups to complex oral surgeries, our expert team ensures quality care in a hygienic environment.</p>
        <div class="services-hero-actions">
          <a href="index.php#consultation" class="btn btn-purple btn-lg"><i class="fa-solid fa-calendar-check"></i> Book Consultation</a>
          <a href="tel:+917639123754" class="btn btn-outline btn-lg">
            <i class="fa-solid fa-phone"></i> Call +91 76391 23754
          </a>
        </div>
      </div>
      <div class="services-hero-visual">
        <div class="services-hero-img">
          <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=900&q=80" alt="Modern dental clinic in Dindigul" />
        </div>
      </div>
    </div>
  </div>
</section>

<div class="services-list-blocks">
  <?php foreach ($all_services as $index => $s): ?>
    <section class="service-block" id="<?php echo $s['id']; ?>">
      <div class="container">
        <div class="service-block-inner <?php echo ($index % 2 !== 0) ? 'reverse' : ''; ?>">
          
          <div class="service-block-visual">
            <div class="service-block-img">
              <img src="<?php echo $s['img']; ?>" alt="<?php echo $s['title']; ?>" loading="lazy" />
            </div>
          </div>

          <div class="service-block-content">
            <span class="eyebrow"><?php echo $s['eyebrow']; ?></span>
            <h2><?php echo $s['title']; ?></h2>
            <p class="service-block-desc"><?php echo $s['desc']; ?></p>
            
            <div class="service-features-list">
              <?php foreach ($s['features'] as $f): ?>
                <div class="sf-item">
                  <i class="fa-solid fa-check sf-icon"></i>
                  <span class="sf-text"><?php echo $f; ?></span>
                </div>
              <?php endforeach; ?>
            </div>

            <div class="service-block-actions">
              <a href="index.php#consultation" class="btn btn-primary">
                <i class="fa-solid fa-calendar-check"></i> Book Appointment
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>
  <?php endforeach; ?>
</div>

<section class="cta-banner-simple">
  <div class="container">
    <div class="cta-banner-inner">
      <h2>Not sure which treatment is right for you?</h2>
      <p>Consult with Dr. Saranyan Mathivanan for a personalized assessment.</p>
      <a href="index.php#consultation" class="btn btn-white btn-lg">Free Consultation</a>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  if (typeof gsap !== 'undefined') {
    gsap.from('.services-hero-content', { opacity: 0, x: -50, duration: 0.8, ease: 'power3.out' });
    gsap.from('.services-hero-visual', { opacity: 0, x: 50, duration: 0.8, ease: 'power3.out', delay: 0.2 });
    
    gsap.utils.toArray('.service-block').forEach((block, i) => {
      gsap.from(block.querySelector('.service-block-visual'), {
        scrollTrigger: { trigger: block, start: 'top 85%' },
        opacity: 0, x: (block.querySelector('.service-block-inner').classList.contains('reverse')) ? 50 : -50,
        duration: 0.8, ease: 'power3.out'
      });
      gsap.from(block.querySelector('.service-block-content'), {
        scrollTrigger: { trigger: block, start: 'top 85%' },
        opacity: 0, x: (block.querySelector('.service-block-inner').classList.contains('reverse')) ? -50 : 50,
        duration: 0.8, ease: 'power3.out', delay: 0.2
      });
    });
  }
});
</script>

<?php include 'includes/footer.php'; ?>
