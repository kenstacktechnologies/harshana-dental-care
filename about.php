<?php
$page_title = "About Dr. Saranyan Mathivanan | Best Dentist in Dindigul";
$page_desc  = "Meet Dr. Saranyan Mathivanan, lead dentist at Harshana Dental Care. Providing expert, pain-free dental treatments in Dindigul since 2009.";
include 'includes/header.php';
?>
<link rel="stylesheet" href="assets/css/about.min.css" />

<section class="about-hero">
  <div class="container">
    <div class="about-hero-inner">
      <span class="eyebrow">Our Legacy</span>
      <h1 class="display-lg">Quality Care You Can <br><span>Trust Since 2009</span></h1>
      <p class="lead text-center">Harshana Dental Care is a trusted name in Dindigul, built on a foundation of clinical excellence, patient comfort, and 15 years of dedicated service.</p>
    </div>
  </div>
</section>

<section class="doctor-section">
  <div class="container">
    <div class="doctor-card">
      <div class="doctor-img">
        <img src="assets/images/profile_pic.png" alt="Dr. Saranyan Mathivanan – Founder & Lead Dentist" />
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
          <a href="contact.php" class="btn btn-primary">
            <i class="fa-solid fa-calendar-check"></i> Book Consultation
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="story-section">
  <div class="container">
    <div class="story-grid">
      <div class="story-img-wrap">
        <div class="story-img-main">
          <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=800&q=80" alt="Harshana Dental Care Modern Clinic" />
        </div>
        <div class="story-badge">
          <span class="year">2009</span>
          <span class="label">Established</span>
        </div>
      </div>
      
      <div class="story-content">
        <span class="eyebrow">Our Story</span>
        <h2 class="display-md">A Journey of Excellence in Dindigul</h2>
        <p>From a small specialized clinic to a comprehensive dental center, our journey has always been about putting patients first. We believe that everyone deserves a healthy, confident smile without the fear of pain.</p>
        
        <div class="milestone-grid">
          <?php 
          $milestones = [
            ['year' => '2009', 'text' => 'Founded by Dr. Saranyan Mathivanan in Dindigul.'],
            ['year' => '2014', 'text' => 'First clinic in the region to introduce pain-free tech.'],
            ['year' => '2019', 'text' => 'Expanded facility with advanced digital diagnostics.'],
            ['year' => '2024', 'text' => 'Celebrating 15 years of smiles and community trust.'],
          ];
          foreach ($milestones as $m): ?>
            <div class="milestone-item">
              <span class="milestone-year"><?php echo $m['year']; ?></span>
              <p class="milestone-text"><?php echo $m['text']; ?></p>
            </div>
          <?php endforeach; ?>
        </div>

        <p>Today, we are proud to be the trusted choice for thousands of families in Dindigul, offering everything from routine cleanings to advanced dental implants under one roof.</p>
      </div>
    </div>
  </div>
</section>

<section class="values-section">
  <div class="container">
    <div class="section-head text-center">
      <span class="eyebrow">Why Choose Us</span>
      <h2>Our Core Values</h2>
      <p class="lead">The principles that guide our practice every single day.</p>
    </div>
    
    <div class="values-grid">
      <?php 
      $values = [
        ['icon' => 'fa-solid fa-heart', 'title' => 'Compassion', 'desc' => 'We treat every patient like family, ensuring a gentle and supportive experience.'],
        ['icon' => 'fa-solid fa-microscope', 'title' => 'Precision', 'desc' => 'Using advanced diagnostics for accuracy in every diagnosis and procedure.'],
        ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Integrity', 'desc' => 'Transparent pricing and evidence-based treatments you can always trust.'],
        ['icon' => 'fa-solid fa-sparkles', 'title' => 'Hygiene', 'desc' => 'Strict ISO-standard sterilization protocols for a safe clinical environment.'],
      ];
      foreach ($values as $v): ?>
        <div class="value-card-premium">
          <div class="value-icon-wrap"><i class="<?php echo $v['icon']; ?>"></i></div>
          <h4><?php echo $v['title']; ?></h4>
          <p><?php echo $v['desc']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="mv-section">
  <div class="container">
    <div class="mv-grid">
      <div class="mv-card-premium">
        <div class="mv-icon-badge v-icon"><i class="fa-solid fa-eye"></i></div>
        <h3>Our Vision</h3>
        <p>To be the most trusted dental care provider in Tamil Nadu, setting the gold standard for clinical excellence and patient comfort in Dindigul and beyond.</p>
        <ul class="mv-list">
          <li><i class="fa-solid fa-check"></i> Regional leader in painless dentistry</li>
          <li><i class="fa-solid fa-check"></i> Continuous adoption of latest technology</li>
          <li><i class="fa-solid fa-check"></i> Community-focused dental education</li>
        </ul>
      </div>

      <div class="mv-card-premium">
        <div class="mv-icon-badge m-icon"><i class="fa-solid fa-bullseye"></i></div>
        <h3>Our Mission</h3>
        <p>To provide accessible, high-quality dental treatments that empower our patients to achieve lasting oral health through personalized care and education.</p>
        <ul class="mv-list">
          <li><i class="fa-solid fa-check"></i> Patient-centric treatment planning</li>
          <li><i class="fa-solid fa-check"></i> Safe, hygienic and stress-free environment</li>
          <li><i class="fa-solid fa-check"></i> Affordable care without compromise</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="about-cta">
  <div class="container">
    <div class="about-cta-inner">
      <h2>Experience Premium Dental Care</h2>
      <p>Join thousands of happy patients who trust us with their smiles.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="contact.php" class="btn btn-white btn-lg">Book Appointment</a>
        <a href="tel:+917639123754" class="btn btn-outline-white btn-lg">Call +91 76391 23754</a>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  if (typeof gsap !== 'undefined') {
    gsap.from('.doctor-card', { 
      scrollTrigger: '.doctor-card',
      opacity: 0, y: 50, duration: 0.8, ease: 'power3.out' 
    });
    gsap.from('.story-img-wrap', { 
      scrollTrigger: '.story-img-wrap',
      opacity: 0, x: -50, duration: 0.8, ease: 'power3.out' 
    });
    gsap.from('.story-content', { 
      scrollTrigger: '.story-content',
      opacity: 0, x: 50, duration: 0.8, ease: 'power3.out', delay: 0.2 
    });
    gsap.utils.toArray('.value-card-premium').forEach((card, i) => {
      gsap.from(card, {
        scrollTrigger: card,
        opacity: 0, y: 30, duration: 0.6, delay: i * 0.1
      });
    });
  }
});
</script>

<?php include 'includes/footer.php'; ?>
