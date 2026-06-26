<?php
require_once 'config.php';
$page_title = '';
$page_desc  = SCHOOL_NAME . ' — ' . SCHOOL_TAGLINE . '. A Christian school in Nsukka, Enugu State, since ' . SCHOOL_FOUNDED . '.';
include 'includes/header.php';

/*
 * NOTE: Gallery/news previews below use placeholder items. If/when these are
 * loaded dynamically from PHP/DB/folders, replace the static arrays with the
 * dynamic source — do not leave hardcoded data in production.
 */
$home_gallery = [
    ['Students in class', 'academics'],
    ['ICT learning', 'ict'],
    ['Inter-house sports', 'sports'],
    ['Graduation moments', 'graduation'],
];
$home_news = [
    ['2026-06-10', 'New Session Resumption & Orientation', 'Key dates and a warm welcome for returning and new students as the academic session begins.'],
    ['2026-05-22', 'Inter-House Sports Highlights', 'Our students showed remarkable diligence and team spirit across this year\'s athletics events.'],
    ['2026-04-15', 'Admissions Now Open', 'Applications for the new academic session are open. Secure your child\'s place at Shalom Academy.'],
];
?>

<!-- ===================== HERO ===================== -->
<section class="hero hero--home">
  <div class="hero__photo">
    <img src="assets/img/hero.jpg" alt="Students of Shalom Academy Nsukka on campus" onerror="this.style.display='none'">
  </div>
  <div class="container">
    <div class="hero__inner">
      <div class="hero__copy">
        <span class="hero__badge">Premium Christian secondary education</span>
        <h1>Welcome to Shalom Academy Nsukka</h1>
        <p class="hero__lead">A premium Nigerian private school committed to academic excellence, moral integrity and raising leaders for a better tomorrow.</p>
        <div class="hero__cta">
          <a class="btn btn--gold btn--lg" href="admission.php">Apply for Admission</a>
          <a class="btn btn--light btn--lg" href="linkschool.php">Check Result</a>
          <a class="btn btn--ghost-light btn--lg" href="contact.php">Contact School</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FEATURES ===================== -->
<section class="section about-preview">
  <div class="container">
    <div class="split">
      <div class="split__media">
        <img src="assets/img/about.jpg" alt="Shalom Academy Nsukka campus" onerror="this.style.display='none'">
      </div>
      <div class="split__copy">
        <span class="eyebrow">Welcome to Shalom</span>
        <h2>Nurturing Minds. Building Character. Transforming Lives.</h2>
        <p class="lead">We provide a balanced education shaped by academic excellence, strong moral values and careful preparation for a dynamic world.</p>
        <p>At Shalom Academy Nsukka, students are guided by qualified educators in an environment that encourages disciplined study, confident communication, practical learning and Christ-centered character.</p>
        <div class="mini-features">
          <span>Qualified &amp; Caring Educators</span>
          <span>Modern Facilities &amp; ICT-Driven Learning</span>
          <span>Christ-Centered Values</span>
          <span>Discipline, Respect &amp; Excellence</span>
        </div>
        <a class="btn btn--primary mt-3" href="about.php">Learn more about us</a>
      </div>
    </div>
  </div>
</section>

<!-- ===================== WHY CHOOSE ===================== -->
<section class="section section--cream">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Why Choose Shalom</span>
      <h2>A trusted school for serious learning and character</h2>
      <p>Our academic culture is calm, structured and focused on helping each learner grow with confidence.</p>
    </div>
    <div class="grid grid-4">
      <article class="card">
        <div class="card__icon" aria-hidden="true">A+</div>
        <h3>Academic Excellence</h3>
        <p>Strong classroom instruction, purposeful study habits and a culture of high expectations.</p>
      </article>
      <article class="card">
        <div class="card__icon" aria-hidden="true">✚</div>
        <h3>Moral Formation</h3>
        <p>Christ-centered values that strengthen integrity, humility, responsibility and service.</p>
      </article>
      <article class="card">
        <div class="card__icon" aria-hidden="true">◎</div>
        <h3>Safe Learning Environment</h3>
        <p>A disciplined, caring school community where students are known and supported.</p>
      </article>
      <article class="card">
        <div class="card__icon" aria-hidden="true">✦</div>
        <h3>Holistic Development</h3>
        <p>Academics, leadership, sports, creativity and life skills developed together.</p>
      </article>
    </div>
  </div>
</section>

<!-- ===================== PORTAL QUICK LINKS ===================== -->
<section class="section portal-section">
  <div class="container">
    <div class="section-head section-head--light">
      <span class="eyebrow">Online portals</span>
      <h2>Quick access for students &amp; staff</h2>
      <p>Essential school services are available through secure quick links.</p>
    </div>
    <div class="grid grid-3">
      <a class="portal-card" href="admission.php">
        <span class="portal-card__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" focusable="false">
            <path d="M12 3 3 7.5l9 4.5 9-4.5L12 3Z"></path>
            <path d="M6.5 10.5v4.2c0 1.8 2.5 3.3 5.5 3.3s5.5-1.5 5.5-3.3v-4.2"></path>
            <path d="M21 8v5"></path>
          </svg>
        </span>
        <span class="tag">Admissions</span>
        <h3>Admission</h3>
        <p>Begin your application and learn about entry requirements.</p>
        <span class="go">Apply now</span>
      </a>
      <a class="portal-card" href="linkschool.php">
        <span class="portal-card__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" focusable="false">
            <path d="M6 3.5h9l3 3V20a.5.5 0 0 1-.5.5h-11A.5.5 0 0 1 6 20V4a.5.5 0 0 1 .5-.5Z"></path>
            <path d="M14.5 3.5V7h3.5"></path>
            <path d="M9 13.2 11 15l4-4.2"></path>
          </svg>
        </span>
        <span class="tag">Students</span>
        <h3>Check Result</h3>
        <p>View student results online for the Nsukka campus.</p>
        <span class="go">Open portal →</span>
      </a>
      <a class="portal-card" href="staff_login.php">
        <span class="portal-card__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" focusable="false">
            <path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"></path>
            <path d="M4.5 20c.8-3.8 3.4-6 7.5-6s6.7 2.2 7.5 6"></path>
            <path d="M18 8.5h3"></path>
            <path d="M19.5 7v3"></path>
          </svg>
        </span>
        <span class="tag">Staff</span>
        <h3>Staff Login</h3>
        <p>Restricted staff access for administrative and academic records.</p>
        <span class="go">Staff sign in →</span>
      </a>
    </div>
  </div>
</section>

<!-- ===================== NEWS + GALLERY ===================== -->
<section class="section news-gallery">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">School life</span>
      <h2>Latest News and Gallery Highlights</h2>
      <p>See recent updates and moments from academics, sports, campus events and graduation.</p>
    </div>
    <div class="news-gallery__grid">
      <article class="news-card news-card--featured">
        <div class="news-card__body">
          <span class="news-card__date"><?= e(date('M j, Y', strtotime($home_news[0][0]))) ?></span>
          <h3><?= e($home_news[0][1]) ?></h3>
          <p><?= e($home_news[0][2]) ?></p>
          <a href="news.php">Read latest update →</a>
        </div>
      </article>
      <div class="gallery-strip">
        <?php foreach ($home_gallery as $i => $g): ?>
          <figure class="gallery-item gallery-item--<?= e($g[1]) ?>">
            <img src="assets/img/gallery-<?= $i + 1 ?>.jpg" alt="<?= e($g[0]) ?> at Shalom Academy" onerror="this.style.display='none'">
            <figcaption><?= e($g[0]) ?></figcaption>
          </figure>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="text-center mt-3">
      <a class="btn btn--ghost" href="news.php">See all news</a>
      <a class="btn btn--primary" href="gallery.php">View gallery</a>
    </div>
  </div>
</section>

<!-- ===================== CONTACT / LOCATION ===================== -->
<section class="section section--alt">
  <div class="container">
    <div class="split">
      <div>
        <span class="eyebrow">Visit us</span>
        <h2>Find Shalom Academy Nsukka</h2>
        <p>We'd love to meet you. Reach out or visit our campus to learn more about enrolment and our programmes.</p>
        <ul class="info-list mt-3">
          <li>
            <span class="ico" aria-hidden="true">📍</span>
            <div><div class="k">Address</div><div class="v"><?= e(SCHOOL_ADDRESS) ?></div></div>
          </li>
          <li>
            <span class="ico" aria-hidden="true">📞</span>
            <div><div class="k">Phone</div><div class="v"><?= e(SCHOOL_PHONES) ?></div></div>
          </li>
          <li>
            <span class="ico" aria-hidden="true">✉️</span>
            <div><div class="k">Email</div><div class="v"><a href="mailto:<?= e(SCHOOL_EMAIL) ?>"><?= e(SCHOOL_EMAIL) ?></a></div></div>
          </li>
        </ul>
        <a class="btn btn--primary mt-3" href="contact.php">Contact us</a>
      </div>
      <div class="map-embed">
        <!-- General Nsukka map; replace q= with the exact campus coordinates/address if desired -->
        <iframe title="Map showing Nsukka, Enugu State"
          src="https://www.google.com/maps?q=Nsukka%2C+Enugu+State%2C+Nigeria&output=embed"
          loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CTA BAND ===================== -->
<section class="section--tight">
  <div class="container">
    <div class="cta-band">
      <h2>Ready to join the Shalom family?</h2>
      <p>Give your child a balanced, qualitative Christian education. Admissions are open for the new session.</p>
      <div class="hero__cta">
        <a class="btn btn--gold btn--lg" href="admission.php">Apply for Admission</a>
        <a class="btn btn--ghost-light btn--lg" href="contact.php">Talk to us</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
