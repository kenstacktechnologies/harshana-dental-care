<?php
$page_title = "Dental Care Blog Dindigul | Harshana Dental Care";
$page_desc  = "Read the best dental care blog in Dindigul for expert tips on oral health, teeth whitening, and dental implants from Harshana Dental Care.";
include 'includes/header.php';

$blogs = [
  [
    'id'       => 1,
    'slug'     => 'why-dental-implants-are-the-best-tooth-replacement',
    'title'    => 'Why Dental Implants Are the Gold Standard for Tooth Replacement in 2025',
    'excerpt'  => 'Missing teeth affect confidence, chewing ability and long-term bone health. Discover why dental implants outperform bridges and dentures as a permanent, natural-looking solution.',
    'cat'      => 'Implants',
    'cat_slug' => 'implants',
    'date'     => 'May 2, 2025',
    'read'     => '7 min read',
    'author'   => 'Dr. James Park',
    'role'     => 'Implantologist',
    'avatar'   => 'https://randomuser.me/api/portraits/men/32.jpg',
    'img'      => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=800&q=80',
    'featured' => true,
  ],
  [
    'id'       => 2,
    'title'    => 'Invisible Aligners vs Traditional Braces: Which Is Right for You?',
    'excerpt'  => 'Clear aligners offer convenience and aesthetics while metal braces deliver time-tested results. We break down the key differences to help you choose.',
    'cat'      => 'Orthodontics',
    'cat_slug' => 'orthodontics',
    'date'     => 'Apr 18, 2025',
    'read'     => '5 min read',
    'author'   => 'Dr. Aisha Sharma',
    'role'     => 'Orthodontist',
    'avatar'   => 'https://randomuser.me/api/portraits/women/68.jpg',
    'img'      => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?w=600&q=80',
    'featured' => false,
  ],
  [
    'id'       => 3,
    'title'    => '10 Foods That Are Secretly Destroying Your Teeth',
    'excerpt'  => 'Some of the worst culprits for tooth decay and staining may surprise you. Learn which foods to limit and how to protect your enamel every day.',
    'cat'      => 'Oral Health',
    'cat_slug' => 'oral-health',
    'date'     => 'Apr 10, 2025',
    'read'     => '4 min read',
    'author'   => 'Dr. Richard Harper',
    'role'     => 'Cosmetic Dentist',
    'avatar'   => 'https://randomuser.me/api/portraits/men/44.jpg',
    'img'      => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=600&q=80',
    'featured' => false,
  ],
  [
    'id'       => 4,
    'title'    => 'How Long Does Teeth Whitening Last? Everything You Need to Know',
    'excerpt'  => 'Professional whitening can last 1–3 years depending on lifestyle choices. Our guide covers what affects longevity and how to maintain your bright smile.',
    'cat'      => 'Cosmetic',
    'cat_slug' => 'cosmetic',
    'date'     => 'Mar 28, 2025',
    'read'     => '6 min read',
    'author'   => 'Dr. Richard Harper',
    'role'     => 'Cosmetic Dentist',
    'avatar'   => 'https://randomuser.me/api/portraits/men/44.jpg',
    'img'      => 'https://images.unsplash.com/photo-1607689943930-af88c0a41073?w=600&q=80',
    'featured' => false,
  ],
  [
    'id'       => 5,
    'title'    => 'The Complete Guide to Root Canal Treatment – Myths vs Reality',
    'excerpt'  => 'Root canals have an undeserved reputation for pain. Modern endodontic therapy is comfortable and effective. Let\'s separate fact from fiction.',
    'cat'      => 'Treatment',
    'cat_slug' => 'treatment',
    'date'     => 'Mar 15, 2025',
    'read'     => '8 min read',
    'author'   => 'Dr. James Park',
    'role'     => 'Endodontist',
    'avatar'   => 'https://randomuser.me/api/portraits/men/32.jpg',
    'img'      => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&q=80',
    'featured' => false,
  ],
  [
    'id'       => 6,
    'title'    => 'When Should My Child First Visit the Dentist?',
    'excerpt'  => 'Establishing early dental habits is crucial for a lifetime of oral health. Find out the right age for the first visit and what to expect from paediatric dental care.',
    'cat'      => 'Pediatric',
    'cat_slug' => 'pediatric',
    'date'     => 'Mar 5, 2025',
    'read'     => '5 min read',
    'author'   => 'Dr. Aisha Sharma',
    'role'     => 'Paediatric Dentist',
    'avatar'   => 'https://randomuser.me/api/portraits/women/68.jpg',
    'img'      => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=600&q=80',
    'featured' => false,
  ],
  [
    'id'       => 7,
    'title'    => 'Smile Makeover: What to Expect Before, During and After',
    'excerpt'  => 'A smile makeover can change your life — but what does the full journey look like? From the first consultation to your final reveal, we explain every step.',
    'cat'      => 'Cosmetic',
    'cat_slug' => 'cosmetic',
    'date'     => 'Feb 22, 2025',
    'read'     => '9 min read',
    'author'   => 'Dr. Richard Harper',
    'role'     => 'Cosmetic Dentist',
    'avatar'   => 'https://randomuser.me/api/portraits/men/44.jpg',
    'img'      => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=600&q=80',
    'featured' => false,
  ],
];

$categories = [
  ['label'=>'All Posts','slug'=>'all','icon'=>'fa-solid fa-grid-2','count'=>count($blogs)],
  ['label'=>'Implants','slug'=>'implants','icon'=>'fa-solid fa-tooth','count'=>1],
  ['label'=>'Cosmetic','slug'=>'cosmetic','icon'=>'fa-solid fa-star','count'=>2],
  ['label'=>'Orthodontics','slug'=>'orthodontics','icon'=>'fa-solid fa-circle-nodes','count'=>1],
  ['label'=>'Oral Health','slug'=>'oral-health','icon'=>'fa-solid fa-heart-pulse','count'=>1],
  ['label'=>'Treatment','slug'=>'treatment','icon'=>'fa-solid fa-syringe','count'=>1],
  ['label'=>'Pediatric','slug'=>'pediatric','icon'=>'fa-solid fa-child','count'=>1],
];
?>
<link rel="stylesheet" href="assets/css/blog.min.css" />


<section class="blog-hero">
  <div class="container">
    <div class="blog-hero-inner">
      <span class="eyebrow">Dental Insights</span>
      <h1>Best Dental Care Blog in <span>Dindigul</span></h1>
      <p class="lead">Expert articles, tips and the latest in dental care — written by our specialist team to help you make informed decisions about your oral health.</p>
      <div class="blog-search-bar">
        <input type="text" id="blogSearch" placeholder="Search articles, treatments..." aria-label="Search blog" />
        <button class="blog-search-btn" type="button" aria-label="Search">
          <i class="fa-solid fa-magnifying-glass"></i> Search
        </button>
      </div>
    </div>
  </div>
</section>


<div class="blog-filter-bar">
  <div class="container">
    <div class="blog-filter-inner">
      <div class="blog-filter-pills">
        <?php foreach ($categories as $c): ?>
          <button
            class="blog-filter-btn <?php echo $c['slug'] === 'all' ? 'active' : ''; ?>"
            data-filter="<?php echo $c['slug']; ?>"
            type="button"
          >
            <i class="<?php echo $c['icon']; ?>"></i>
            <?php echo $c['label']; ?>
            <span style="background:rgba(108,63,197,0.12);color:var(--purple);border-radius:99px;padding:0 7px;font-size:11px;"><?php echo $c['count']; ?></span>
          </button>
        <?php endforeach; ?>
      </div>
      <select class="blog-sort-select" aria-label="Sort posts">
        <option>Latest First</option>
        <option>Oldest First</option>
        <option>Most Popular</option>
      </select>
    </div>
  </div>
</div>


<section class="blog-section">
  <div class="container">
    <div class="blog-main-layout">

      
      <div>
        <div class="blog-posts-grid" id="blogGrid">

          <?php foreach ($blogs as $b):
            $isFeatured = !empty($b['featured']); ?>

            <?php if ($isFeatured): ?>
            
            <article class="blog-card-featured" data-cat="<?php echo $b['cat_slug']; ?>" data-title="<?php echo strtolower($b['title']); ?>">
              <div class="blog-thumb">
                <img src="<?php echo $b['img']; ?>" alt="<?php echo htmlspecialchars($b['title']); ?>" loading="lazy" />
                <span class="blog-cat-pill"><?php echo $b['cat']; ?></span>
                <span class="blog-read-time"><i class="fa-regular fa-clock"></i><?php echo $b['read']; ?></span>
              </div>
              <div class="blog-body">
                <span class="blog-featured-label"><i class="fa-solid fa-bookmark"></i> Featured Article</span>
                <div class="blog-meta">
                  <span class="blog-meta-item"><i class="fa-regular fa-calendar"></i><?php echo $b['date']; ?></span>
                  <span class="blog-meta-item"><i class="fa-solid fa-user-doctor"></i><?php echo $b['author']; ?></span>
                </div>
                <h2 class="blog-title"><a href="blog-details.php?id=<?php echo $b['id']; ?>"><?php echo $b['title']; ?></a></h2>
                <p class="blog-excerpt"><?php echo $b['excerpt']; ?></p>
                <div class="blog-footer">
                  <div class="blog-author-sm">
                    <img src="<?php echo $b['avatar']; ?>" alt="<?php echo $b['author']; ?>" />
                    <div>
                      <div class="blog-author-name"><?php echo $b['author']; ?></div>
                      <div class="blog-author-role"><?php echo $b['role']; ?></div>
                    </div>
                  </div>
                  <a href="blog-details.php?id=<?php echo $b['id']; ?>" class="blog-more-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </article>

            <?php else: ?>
            
            <article class="blog-card" data-cat="<?php echo $b['cat_slug']; ?>" data-title="<?php echo strtolower($b['title']); ?>">
              <div class="blog-thumb">
                <img src="<?php echo $b['img']; ?>" alt="<?php echo htmlspecialchars($b['title']); ?>" loading="lazy" />
                <span class="blog-cat-pill"><?php echo $b['cat']; ?></span>
                <span class="blog-read-time"><i class="fa-regular fa-clock"></i><?php echo $b['read']; ?></span>
              </div>
              <div class="blog-body">
                <div class="blog-meta">
                  <span class="blog-meta-item"><i class="fa-regular fa-calendar"></i><?php echo $b['date']; ?></span>
                  <span class="blog-meta-item"><i class="fa-regular fa-clock"></i><?php echo $b['read']; ?></span>
                </div>
                <h2 class="blog-title"><a href="blog-details.php?id=<?php echo $b['id']; ?>"><?php echo $b['title']; ?></a></h2>
                <p class="blog-excerpt"><?php echo $b['excerpt']; ?></p>
                <div class="blog-footer">
                  <div class="blog-author-sm">
                    <img src="<?php echo $b['avatar']; ?>" alt="<?php echo $b['author']; ?>" />
                    <div>
                      <div class="blog-author-name"><?php echo $b['author']; ?></div>
                      <div class="blog-author-role"><?php echo $b['role']; ?></div>
                    </div>
                  </div>
                  <a href="blog-details.php?id=<?php echo $b['id']; ?>" class="blog-more-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </article>
            <?php endif; ?>

          <?php endforeach; ?>
        </div>

        
        <div class="blog-load-more">
          <p class="blog-load-progress">Showing <strong>7</strong> of <strong>24</strong> articles</p>
          <div class="blog-load-bar"><div class="blog-load-bar-fill"></div></div>
          <button class="btn btn-outline btn-lg" id="loadMoreBtn">
            <i class="fa-solid fa-rotate-right"></i> Load More Articles
          </button>
        </div>

        
        <div class="blog-pagination" aria-label="Blog pagination">
          <button class="page-btn nav"><i class="fa-solid fa-arrow-left"></i> Prev</button>
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">3</button>
          <span class="page-ellipsis">…</span>
          <button class="page-btn">8</button>
          <button class="page-btn nav">Next <i class="fa-solid fa-arrow-right"></i></button>
        </div>
      </div>

      

    </div>
  </div>
</section>


<section class="blog-cta-section">
  <div class="container">
    <div class="blog-cta-inner">
      <div class="blog-cta-text">
        <span class="eyebrow" style="color:rgba(255,255,255,0.75);">Free Consultation</span>
        <h2>Ready to Transform Your Smile?</h2>
        <p>Reading is great — but taking action is better. Book your free, no-obligation consultation with our expert team and start your smile journey today.</p>
        <div style="display:flex;gap:14px;margin-top:28px;flex-wrap:wrap;">
          <a href="contact.php" class="btn btn-white btn-lg"><i class="fa-solid fa-calendar-check"></i> Book Appointment</a>
          <a href="contact.php" class="btn btn-lg" style="background:rgba(255,255,255,0.1);color:white;border:2px solid rgba(255,255,255,0.3);"><i class="fa-solid fa-location-dot"></i> Our Clinic</a>
        </div>
      </div>
      <div class="blog-cta-form">
        <h4>Get Dental Tips by Email</h4>
        <p>Join our community of 8,000+ readers for monthly expert dental insights.</p>
        <div class="cta-form-group">
          <input type="text" class="cta-form-input" placeholder="Your full name" />
          <input type="email" class="cta-form-input" placeholder="Email address" />
          <button type="button" class="cta-form-submit"><i class="fa-solid fa-paper-plane"></i> Subscribe — It's Free</button>
        </div>
        <p style="font-size:12px;color:rgba(255,255,255,0.5);margin-top:12px;text-align:center;">No spam. Unsubscribe at any time.</p>
      </div>
    </div>
  </div>
</section>

<script>

const searchInput = document.getElementById('blogSearch');
const blogCards = document.querySelectorAll('.blog-card, .blog-card-featured');
if (searchInput) {
  searchInput.addEventListener('input', function() {
    const q = this.value.toLowerCase();
    blogCards.forEach(c => {
      c.style.display = (q === '' || c.dataset.title.includes(q)) ? '' : 'none';
    });
  });
}


document.querySelectorAll('.blog-filter-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    document.querySelectorAll('.blog-filter-btn').forEach(b => b.classList.remove('active'));
    this.classList.add('active');
    const filter = this.dataset.filter;
    blogCards.forEach(card => {
      const show = filter === 'all' || card.dataset.cat === filter;
      card.style.display = show ? '' : 'none';
    });
  });
});


document.querySelectorAll('.page-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    if (!this.classList.contains('nav')) {
      document.querySelectorAll('.page-btn:not(.nav)').forEach(b => b.classList.remove('active'));
      this.classList.add('active');
    }
  });
});


const loadMoreBtn = document.getElementById('loadMoreBtn');
if (loadMoreBtn) {
  loadMoreBtn.addEventListener('click', function() {
    const orig = this.innerHTML;
    this.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Loading...';
    this.disabled = true;
    setTimeout(() => {
      this.innerHTML = orig;
      this.disabled = false;
      document.querySelector('.blog-load-bar-fill').style.width = '100%';
      document.querySelector('.blog-load-progress').innerHTML = 'Showing <strong>24</strong> of <strong>24</strong> articles';
      this.style.display = 'none';
    }, 1400);
  });
}


if (typeof gsap !== 'undefined') {
  gsap.from('.blog-hero-inner', { opacity:0, y:40, duration:0.9, ease:'power3.out', delay:0.2 });
  gsap.utils.toArray('.blog-card, .blog-card-featured').forEach((c,i) => {
    gsap.from(c, { scrollTrigger:{trigger:c,start:'top 92%'}, opacity:0, y:30, duration:0.6, delay:(i%2)*0.1, ease:'power3.out' });
  });
  gsap.utils.toArray('.sidebar-widget, .newsletter-widget').forEach((w,i) => {
    gsap.from(w, { scrollTrigger:{trigger:w,start:'top 92%'}, opacity:0, x:20, duration:0.55, delay:i*0.08, ease:'power3.out' });
  });
}
</script>

<?php include 'includes/footer.php'; ?>
