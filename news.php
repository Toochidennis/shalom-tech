<?php
require_once 'config.php';

/*
 * News — placeholder content.
 *
 * [VERIFY] If news is meant to be managed dynamically (DB, CMS, or a posts
 * folder), replace the $news array below with that source. The markup is
 * structured so swapping the data source requires no CSS/layout changes.
 */
$news = [
    ['2026-06-10', 'New Session Resumption & Orientation', 'Welcome back! Find key resumption dates and orientation details for new and returning students as the academic session begins. We look forward to another year of diligent learning.', 'news-1.jpg'],
    ['2026-05-22', 'Inter-House Sports Highlights', 'Our students displayed remarkable diligence and team spirit across this year\'s inter-house athletics. Congratulations to all participating houses for a memorable event.', 'news-2.jpg'],
    ['2026-04-15', 'Admissions Now Open', 'Applications for the new academic session are now open at both our Nsukka and Obollo campuses. Visit our Admission page to begin your child\'s enrolment.', 'news-3.jpg'],
    ['2026-03-08', 'ICT Laboratory Upgrade', 'We have refreshed our ICT laboratory to give students even more hands-on access to computers and digital learning tools.', 'news-4.jpg'],
    ['2026-02-12', 'Agriculture Practicals in Full Swing', 'Students rolled up their sleeves for the term\'s agriculture practicals, connecting classroom lessons to real-world farming skills.', 'news-5.jpg'],
    ['2026-01-20', 'Excellence Awards Ceremony', 'We celebrated students whose diligence led to outstanding results last term. Excellence, once again, was rewarded.', 'news-6.jpg'],
];
usort($news, fn($a, $b) => strcmp($b[0], $a[0])); // newest first

$page_title = 'News';
$page_desc  = 'Latest news, events and announcements from ' . SCHOOL_NAME . '.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner">
      <div class="breadcrumb"><a href="index.php">Home</a> / News</div>
      <h1>News &amp; Events</h1>
      <p>Stay up to date with the latest announcements, events and stories from Shalom Academy.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php if (!empty($news)): ?>
      <div class="news-grid">
        <?php foreach ($news as $i => $n): ?>
          <article class="news-card">
            <div class="news-card__media">
              <img src="assets/img/<?= e($n[3]) ?>" alt="<?= e($n[1]) ?>" loading="lazy" onerror="this.style.display='none'">
            </div>
            <div class="news-card__body">
              <span class="news-card__date"><?= e(date('M j, Y', strtotime($n[0]))) ?></span>
              <h3><?= e($n[1]) ?></h3>
              <p><?= e($n[2]) ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
      <p class="placeholder-note">Placeholder news items — replace the <code>$news</code> array in <code>news.php</code> with your real source (DB/CMS/folder).</p>
    <?php else: ?>
      <p class="lead text-center">No news posts yet. Please check back soon.</p>
    <?php endif; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
