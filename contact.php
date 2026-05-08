<?php
$page_title = "Contact Harshana Dental | Dindigul Clinic Location & Hours";
$page_desc  = "Find the best dental clinic in Dindigul. Get directions, view our 24/7 operating hours, and connect with our expert team for your dental needs.";
include 'includes/header.php';
?>
<link rel="stylesheet" href="assets/css/contact.min.css" />

<section class="contact-hero">
  <div class="container">
    <div class="contact-hero-inner">
      <span class="eyebrow">Contact Us</span>
      <h1 class="display-lg">Find Your Way to a<br><span>Perfect Smile</span></h1>
      <p class="lead">We are conveniently located in RM Colony, Dindigul. Whether you have a question, need an emergency visit, or want to schedule a check-up, we're here for you 24/7.</p>
    </div>
  </div>
</section>

<section class="contact-methods">
  <div class="container">
    <div class="contact-methods-grid">
      <div class="method-card">
        <div class="method-icon"><i class="fa-solid fa-phone"></i></div>
        <h3>Call or WhatsApp</h3>
        <p>Immediate assistance for bookings and dental emergencies.</p>
        <a href="tel:+917639123754" class="method-link">+91 76391 23754</a>
      </div>
      <div class="method-card">
        <div class="method-icon"><i class="fa-solid fa-envelope"></i></div>
        <h3>Email Us</h3>
        <p>For general inquiries, medical records, or corporate tie-ups.</p>
        <a href="mailto:saranyan.mathivanan@gmail.com" class="method-link">saranyan.mathivanan@gmail.com</a>
      </div>
      <div class="method-card">
        <div class="method-icon"><i class="fa-solid fa-location-dot"></i></div>
        <h3>Visit Clinic</h3>
        <p>H3, 9th Cross, RM Colony Main Rd, Dindigul, Tamil Nadu.</p>
        <a href="https://maps.app.goo.gl/0x3ba9f03264448537:0x6b8763567a5b3a4a" target="_blank" class="method-link">Get Directions <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </div>
    </div>
  </div>
</section>

<section class="contact-main">
  <div class="container">
    <div class="contact-main-grid">
      
      <div class="contact-map-side">
        <div class="map-container">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.2828659682555!2d77.9624597758368!3d10.39912078972754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba9f03264448537%3A0x6b8763567a5b3a4a!2sHarshana%20Dental%20Care!5e0!3m2!1sen!2sin!4v1714545000000!5m2!1sen!2sin" 
            allowfullscreen="" 
            loading="lazy">
          </iframe>
          <div class="map-directions">
            <div class="dir-item">
              <i class="fa-solid fa-bus"></i>
              <span>Near 9th Cross Street Bus Stop</span>
            </div>
            <div class="dir-item">
              <i class="fa-solid fa-car"></i>
              <span>Free Ample Parking Available</span>
            </div>
          </div>
        </div>
      </div>

      <div class="contact-details-side">
        <div class="details-widget">
          <h4><i class="fa-solid fa-clock"></i> Opening Hours</h4>
          <div class="hours-list">
            <div class="hour-row">
              <span class="day">Monday – Saturday</span>
              <span class="time">Open 24 Hours</span>
            </div>
            <div class="hour-row">
              <span class="day">Sunday</span>
              <span class="time">Open 24 Hours</span>
            </div>
          </div>
          <div class="hours-note">
            <span class="pulse-dot"></span>
            Currently accepting emergency walk-ins
          </div>
        </div>

        <div class="details-widget">
          <h4><i class="fa-solid fa-share-nodes"></i> Connect With Us</h4>
          <p>Follow our journey and get daily dental health tips from our experts.</p>
          <div class="social-grid">
            <a href="https://facebook.com/harshanadental" class="social-item fb"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://instagram.com/harshanadental" class="social-item ig"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://wa.me/917639123754" class="social-item wa"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#" class="social-item yt"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>

        <div class="booking-promo-card">
          <h3>Ready for your visit?</h3>
          <p>Skip the wait by booking your free consultation online.</p>
          <a href="index.php#consultation" class="btn btn-white btn-block">Book Free Consultation</a>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="contact-faq">
  <div class="container">
    <div class="section-head text-center">
      <span class="eyebrow">Common Queries</span>
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="faq-grid-modern">
      <div class="faq-card">
        <h5>Do I need an appointment?</h5>
        <p>While we recommend booking in advance, we are open 24/7 and prioritize emergency walk-ins for pain relief.</p>
      </div>
      <div class="faq-card">
        <h5>Where is the parking?</h5>
        <p>We offer free street-side and dedicated parking right in front of the clinic in RM Colony.</p>
      </div>
      <div class="faq-card">
        <h5>Do you accept insurance?</h5>
        <p>Yes, we work with major insurance providers and offer flexible interest-free EMI plans for treatments.</p>
      </div>
      <div class="faq-card">
        <h5>Are you open on Sundays?</h5>
        <p>Yes, we are a fully operational 24/7 dental clinic, including Sundays and public holidays.</p>
      </div>
    </div>
  </div>
</section>

<section class="emergency-strip">
  <div class="container">
    <div class="emergency-strip-inner">
      <i class="fa-solid fa-truck-medical"></i>
      <span>Dental Emergency? Call us instantly in Dindigul.</span>
      <a href="tel:+917639123754" class="btn btn-white btn-sm">076391 23754</a>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  if (typeof gsap !== 'undefined') {
    gsap.from('.contact-hero-inner', { opacity: 0, y: 30, duration: 0.8, ease: 'power3.out' });
    gsap.from('.method-card', { opacity: 0, y: 20, stagger: 0.1, duration: 0.6, delay: 0.3, ease: 'power3.out' });
    gsap.from('.contact-map-side', { scrollTrigger: '.contact-main', opacity: 0, x: -30, duration: 0.8, ease: 'power3.out' });
    gsap.from('.contact-details-side', { scrollTrigger: '.contact-main', opacity: 0, x: 30, duration: 0.8, ease: 'power3.out' });
  }
});
</script>

<?php include 'includes/footer.php'; ?>
