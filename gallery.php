<?php
require_once 'config.php';

/*
 * Gallery — dynamic-ready.
 * Images are read from assets/img/gallery/ so staff can add photos by simply
 * dropping files into that folder (no code change needed). If the folder is
 * empty/missing, a set of labelled placeholders is shown instead.
 *
 * This preserves the "don't hardcode dynamic content" rule: the gallery is
 * driven by the filesystem, not a hardcoded list.
 */
$gallery_dir = __DIR__ . '/assets/img/gallery';
$gallery_url = 'assets/img/gallery';
$images = [];
if (is_dir($gallery_dir)) {
    foreach (glob($gallery_dir . '/*.{jpg,jpeg,png,webp,gif}', GLOB_BRACE) as $file) {
        $base    = basename($file);
        $caption = ucwords(str_replace(['-', '_'], ' ', pathinfo($base, PATHINFO_FILENAME)));
        $images[] = ['src' => $gallery_url . '/' . rawurlencode($base), 'alt' => $caption];
    }
}

// Fallback placeholders (replace by adding real files to assets/img/gallery/)
$placeholders = [
    'Agriculture practicals', 'Student leadership', 'ICT laboratory',
    'Classroom activities', 'Sports & games', 'Cultural day',
    'Science practicals', 'Award ceremony', 'Excursion',
];

$page_title = 'Gallery';
$page_desc  = 'Photos of campus life at ' . SCHOOL_NAME . ' — agriculture practicals, ICT, leadership and more.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner">
      <div class="breadcrumb"><a href="index.php">Home</a> / Gallery</div>
      <h1>Gallery</h1>
      <p>A look at learning and life at Shalom Academy — from agriculture practicals to ICT and student leadership.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php if (!empty($images)): ?>
      <div class="gallery-grid">
        <?php foreach ($images as $img): ?>
          <figure class="gallery-item">
            <img src="<?= e($img['src']) ?>" alt="<?= e($img['alt']) ?>" loading="lazy">
            <figcaption><?= e($img['alt']) ?></figcaption>
          </figure>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="gallery-grid">
        <?php foreach ($placeholders as $i => $caption): ?>
          <figure class="gallery-item">
            <img src="<?= e($gallery_url) ?>/<?= $i + 1 ?>.jpg" alt="<?= e($caption) ?> at Shalom Academy"
                 loading="lazy" onerror="this.style.display='none'">
            <figcaption><?= e($caption) ?></figcaption>
          </figure>
        <?php endforeach; ?>
      </div>
      <p class="placeholder-note">Placeholder gallery — add photos to <code>assets/img/gallery/</code> and they appear here automatically.</p>
    <?php endif; ?>
  </div>
</section>

<section class="section--tight">
  <div class="container">
    <div class="cta-band">
      <h2>See more on social media</h2>
      <p>Follow Shalom Academy for the latest photos, videos and updates from our campuses.</p>
      <div class="hero__cta">
        <a class="btn btn--gold btn--lg" href="<?= e(SOCIAL_FACEBOOK) ?>" target="_blank" rel="noopener">Facebook</a>
        <a class="btn btn--ghost-light btn--lg" href="<?= e(SOCIAL_YOUTUBE) ?>" target="_blank" rel="noopener">YouTube</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
