<?php

$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Best Dentist in Dindigul | Harshana Dental Care'; ?></title>
  <meta name="description" content="<?php echo isset($page_desc) ? htmlspecialchars($page_desc) : 'Looking for a trusted dentist in Dindigul? Harshana Dental Care offers pain-free treatments, advanced dental care, and affordable services for a healthy smile.'; ?>" />
  <meta name="keywords" content="dental care, cosmetic dentistry, dental implants, teeth whitening, invisible aligners, orthodontics, painless root canal, smile makeover, pediatric dentistry, TMJ disorder, Dindigul dentist" />
  <meta name="author" content="Harshana Dental Care" />
  <meta name="robots" content="index, follow" />

  
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Harshana Dental Care – Premium Dentistry" />
  <meta property="og:description" content="Transform your smile with expert dental care. Cosmetic dentistry, implants, whitening & more." />
  <meta property="og:image" content="assets/images/og-image.jpg" />
  <meta property="og:url" content="https://harshanadentalcare.com" />
  <meta name="twitter:card" content="summary_large_image" />

  
  <link rel="canonical" href="https://harshanadentalcare.com/<?php echo $current_page; ?>" />

  
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🦷</text></svg>" />

  
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  
  <link rel="stylesheet" href="assets/css/style.css" />

  
  <link rel="stylesheet" href="assets/css/index.css" />

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" defer></script>

  
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Dentist",
    "name": "Harshana Dental Care",
    "description": "Premium dental care specialising in cosmetic dentistry, dental implants, orthodontics and smile makeovers in Dindigul since 2009.",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Dindigul",
      "addressRegion": "Tamil Nadu",
      "addressCountry": "IN"
    },
    "openingHours": ["Mo-Sa 09:00-20:00"],
    "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "2400" }
  }
  </script>
  
  <style>
    
    html, body {
      overflow-x: clip !important;
      max-width: 100vw;
    }
    
    *, *::before, *::after {
      box-sizing: border-box;
      min-width: 0;
    }
    
    img { max-width: 100%; height: auto; display: block; }
    
    
    
    .navbar {
      width: 100%;
      max-width: 100%;
      overflow-x: clip;
      overflow-y: visible;
      flex-wrap: nowrap;
      padding: 0;
    }
    body {
      padding-top: 78px;
      overflow-x: hidden;
      width: 100%;
      max-width: 100vw;
    }
    @media (max-width: 768px) {
      
      .navbar { height: 66px; padding: 0 12px; }
    }
    @media (max-width: 480px) {
      
      .navbar { height: 60px; padding: 0 10px; }
    }
  </style>
</head>
<body>



<header id="header">
  <div class="container">
    <nav class="navbar" role="navigation" aria-label="Main navigation">

      
      <a href="index.php" class="nav-logo" aria-label="Harshana Dental Care Home">
        <?php if (file_exists(dirname(__DIR__) . '/assets/images/logo.png')): ?>
          <img
            src="assets/images/logo.png"
            alt="Harshana Dental Care"
            class="navbar-logo-img"
          />
        <?php else: ?>
          <div class="nav-logo-icon" aria-hidden="true">
            <i class="fa-solid fa-tooth"></i>
          </div>
        <?php endif; ?>
        <div class="nav-logo-text">
          <span class="nav-logo-name nav-logo-name-v2">Harshana Dental Care</span>
          <span class="nav-logo-tagline">Smile with Confidence</span>
        </div>
      </a>

      
      <ul class="nav-menu" aria-label="Site navigation">
        <li class="nav-item">
          <a href="index.php"
             class="nav-link <?php echo $current_page === 'index.php' ? 'active' : ''; ?>">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="about.php"
             class="nav-link <?php echo $current_page === 'about.php' ? 'active' : ''; ?>">
            About
          </a>
        </li>
        <li class="nav-item">
          <a href="services.php"
             class="nav-link <?php echo $current_page === 'services.php' ? 'active' : ''; ?>">
            Services
          </a>
        </li>
        <li class="nav-item">
          <a href="blog.php"
             class="nav-link <?php echo $current_page === 'blog.php' ? 'active' : ''; ?>">
            Blog
          </a>
        </li>
        <li class="nav-item">
          <a href="contact.php"
             class="nav-link <?php echo $current_page === 'contact.php' ? 'active' : ''; ?>">
            Contact Us
          </a>
        </li>
      </ul>

      
      <div class="nav-cta">
        <a href="tel:+917639123754" class="btn btn-call-blue btn-sm">
          <i class="fa-solid fa-phone" aria-hidden="true"></i> Call Us
        </a>
        <a href="https://wa.me/917639123754" class="btn btn-wa-green btn-sm" target="_blank">
          <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Book Appointment
        </a>
      </div>

      
      <button
        class="nav-hamburger"
        aria-label="Open navigation menu"
        aria-expanded="false"
        aria-controls="mobileMenuPanel"
      >
        <span></span>
        <span></span>
        <span></span>
      </button>

    </nav>
  </div>
</header>


<div
  class="mobile-menu"
  id="mobileMenuPanel"
  aria-hidden="true"
  role="dialog"
  aria-modal="true"
  aria-label="Mobile navigation"
>
  <button class="mobile-menu-close" aria-label="Close navigation menu">
    <i class="fa-solid fa-xmark" aria-hidden="true"></i>
  </button>

  <nav>
    <a href="index.php"    class="mobile-nav-link">Home</a>
    <a href="about.php"    class="mobile-nav-link">About Us</a>
    <a href="services.php" class="mobile-nav-link">Our Services</a>
    <a href="blog.php"     class="mobile-nav-link">Blog</a>
    <a href="contact.php"  class="mobile-nav-link">Contact</a>
  </nav>

  <div style="margin-top:32px; display:flex; flex-direction:column; gap:12px;">
    <a href="https://wa.me/917639123754" class="btn btn-primary btn-lg" style="justify-content:center;" target="_blank">
      <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Book Appointment
    </a>
    <a href="tel:+917639123754" class="btn btn-outline btn-lg" style="justify-content:center;">
      <i class="fa-solid fa-phone" aria-hidden="true"></i> Call Us Now
    </a>
  </div>
</div>
