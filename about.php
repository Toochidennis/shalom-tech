<?php
require_once 'config.php';
$page_title = 'About Us';
$page_desc  = 'Learn about ' . SCHOOL_NAME . ' — a Christian school in Nsukka offering balanced, qualitative education since ' . SCHOOL_FOUNDED . '.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner">
      <div class="breadcrumb"><a href=".">Home</a> / About Us</div>
      <h1>About Shalom Academy</h1>
      <p>A community committed to balanced, qualitative Christian education at minimum cost.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="split">
      <div class="split__media">
        <img src="assets/img/about.jpg" alt="Students learning at Shalom Academy Nsukka"
             onerror="this.parentElement.style.background='linear-gradient(160deg,#16507f,#128a8a)'">
      </div>
      <div class="prose">
        <span class="eyebrow">Our story</span>
        <h2>Serving Nsukka since <?= e(SCHOOL_FOUNDED) ?></h2>
        <p>Founded on the 1st of January <?= e(SCHOOL_FOUNDED) ?>, Shalom Academy Nsukka was established to offer balanced, qualitative Christian education at minimum cost. From the beginning, our focus has been on the whole child — academic ability, character and faith.</p>
        <p>We assist students in developing skills, thinking habits, organisation and goal-setting. Our teaching is interactive and quality-driven, combining academic and pre-academic expectations so that learning is both rigorous and practical.</p>
        <p>We believe that diligence leads to excellence, and we encourage every student to pursue both with confidence.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="container">
    <div class="grid grid-3">
      <div class="card">
        <div class="card__icon" aria-hidden="true">01</div>
        <h3>Our Vision</h3>
        <p>The vision of Shalom Academy Nsukka is to create and manipulate contents and processes. Our target is to produce a school with a difference.</p>
      </div>
      <div class="card">
        <div class="card__icon" aria-hidden="true">02</div>
        <h3>Our Mission</h3>
        <p>To develop and implement educational models for building intellectually creative children in a disciplined, God-fearing and non-threatening environment that values individual differences.</p>
      </div>
      <div class="card">
        <div class="card__icon" aria-hidden="true">03</div>
        <h3>Video Tour</h3>
        <p>Watch the school's introduction and learn more about Shalom Academy Nsukka.</p>
        <a class="btn btn--ghost mt-2" href="https://www.youtube.com/watch?v=tmdCINCKk2w" target="_blank" rel="noopener">Watch on YouTube</a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="prose history-panel">
      <span class="eyebrow">History</span>
      <h2>History of Shalom Academy Nsukka</h2>
      <p>Shalom Academy's origin started on 1st January 1999, when a definite statement and clear-cut vision to start was received from God. The academy came into being to fulfil the desire to ensure that balanced qualitative Christian education at minimum cost could be achieved.</p>
      <p>From humble beginnings, land was procured, the first block was laid between April and July 1999, staff recruitment and teacher training followed, and the first academic session began on 4th October 1999.</p>
      <p>The school continues to stand on that founding conviction: faith, diligence, high moral standards and a commitment to helping students learn with purpose.</p>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">What guides us</span>
      <h2>Our core values</h2>
      <p>The principles that shape everyday life at Shalom Academy.</p>
    </div>
    <div class="grid grid-4">
      <article class="card"><div class="card__icon" aria-hidden="true">✝️</div><h3>Faith</h3><p>A Christ-centred environment that builds integrity and conscience.</p></article>
      <article class="card"><div class="card__icon" aria-hidden="true">💪</div><h3>Diligence</h3><p>Hard work and consistency as the foundation of excellence.</p></article>
      <article class="card"><div class="card__icon" aria-hidden="true">🤝</div><h3>Respect</h3><p>Care and courtesy toward every member of our community.</p></article>
      <article class="card"><div class="card__icon" aria-hidden="true">🚀</div><h3>Excellence</h3><p>A commitment to doing our best in all things, big and small.</p></article>
    </div>
  </div>
</section>

<section class="section section--navy">
  <div class="container">
    <div class="stat-strip">
      <div><div class="num"><?= (int) date('Y') - (int) SCHOOL_FOUNDED ?>+</div><div class="lbl">Years educating Nsukka</div></div>
      <div><div class="num">2</div><div class="lbl">Campuses</div></div>
      <div><div class="num">100%</div><div class="lbl">Christian foundation</div></div>
      <div><div class="num">∞</div><div class="lbl">Potential in every child</div></div>
    </div>
  </div>
</section>

<section class="section--tight">
  <div class="container">
    <div class="cta-band">
      <h2>Want to see Shalom Academy for yourself?</h2>
      <p>Arrange a visit or start an application — we're happy to answer any questions.</p>
      <div class="hero__cta">
        <a class="btn btn--gold btn--lg" href="admission">Apply for Admission</a>
        <a class="btn btn--ghost-light btn--lg" href="contact">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
