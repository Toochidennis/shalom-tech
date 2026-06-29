<?php
/**
 * includes/header.php — shared <head>, header bar and primary navigation.
 *
 * Each page sets $page_title (and optionally $page_desc) BEFORE including this,
 * then includes config.php. Example:
 *   <?php require_once 'config.php'; $page_title = 'About Us';
 *   include 'includes/header.php'; ?>
 */
if (!defined('SCHOOL_NAME')) { require_once __DIR__ . '/../config.php'; }
$page_title = isset($page_title) ? $page_title : '';
$page_desc  = isset($page_desc) ? $page_desc : SCHOOL_TAGLINE;
$_title_full = $page_title ? ($page_title . ' — ' . SCHOOL_NAME) : (SCHOOL_NAME . ' — ' . SCHOOL_TAGLINE);
$_cur = current_page();

// --- SEO per-page overrides (pages may set these BEFORE including header) ---
$page_robots    = isset($page_robots) ? $page_robots : 'index, follow';            // login/portal pages set 'noindex, follow'
$page_image     = isset($page_image) ? $page_image : DEFAULT_OG_IMAGE;              // social-share image (site-relative)
$_canonical     = isset($canonical) ? $canonical : canonical_url();                 // absolute canonical URL
$_og_image_abs  = (strpos($page_image, 'http') === 0) ? $page_image : abs_url($page_image);
$_og_type       = ($_cur === 'index.php') ? 'website' : 'article';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($_title_full) ?></title>
  <meta name="description" content="<?= e($page_desc) ?>">
  <meta name="robots" content="<?= e($page_robots) ?>">
  <meta name="author" content="<?= e(SCHOOL_NAME) ?>">
  <meta name="theme-color" content="<?= e(THEME_COLOR) ?>">
  <link rel="canonical" href="<?= e($_canonical) ?>">

  <!-- Favicons / app icons -->
  <link rel="icon" type="image/png" href="assets/img/school-logo.png">
  <link rel="apple-touch-icon" href="assets/img/school-logo.png">
  <link rel="manifest" href="site.webmanifest">

  <!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
  <meta property="og:type" content="<?= e($_og_type) ?>">
  <meta property="og:site_name" content="<?= e(SCHOOL_NAME) ?>">
  <meta property="og:title" content="<?= e($_title_full) ?>">
  <meta property="og:description" content="<?= e($page_desc) ?>">
  <meta property="og:url" content="<?= e($_canonical) ?>">
  <meta property="og:image" content="<?= e($_og_image_abs) ?>">
  <meta property="og:locale" content="<?= e(SITE_LOCALE) ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= e($_title_full) ?>">
  <meta name="twitter:description" content="<?= e($page_desc) ?>">
  <meta name="twitter:image" content="<?= e($_og_image_abs) ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Lora:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Structured data: EducationalOrganization (Google rich results) -->
  <script type="application/ld+json">
  <?= json_encode([
    '@context' => 'https://schema.org',
    '@type'    => 'EducationalOrganization',
    'name'     => SCHOOL_NAME,
    'alternateName' => SCHOOL_SHORT,
    'url'      => abs_url(''),
    'logo'     => abs_url('assets/img/school-logo.png'),
    'image'    => abs_url(DEFAULT_OG_IMAGE),
    'description' => SCHOOL_TAGLINE,
    'foundingDate' => SCHOOL_FOUNDED,
    'slogan'   => SCHOOL_MOTTO,
    'email'    => SCHOOL_EMAIL,
    'telephone' => SCHOOL_PHONE_PRIMARY,
    'address'  => [
      '@type' => 'PostalAddress',
      'streetAddress'   => 'No. 50 Old Enugu-Ezike Road, Off Odenigbo Express',
      'addressLocality' => 'Nsukka',
      'addressRegion'   => 'Enugu State',
      'addressCountry'  => 'NG',
    ],
    'sameAs'   => [SOCIAL_FACEBOOK, SOCIAL_YOUTUBE],
  ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
  </script>
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="site-header">
    <div class="nav-shell">
      <div class="container">
      <nav class="nav" aria-label="Primary">
        <a class="brand" href="<?= e(url('index.php')) ?>" aria-label="<?= e(SCHOOL_NAME) ?> home">
          <span class="brand__logo" aria-hidden="true"><img src="assets/img/school-logo.png" alt=""></span>
          <span class="brand__text">
            <span class="brand__name">SHALOM ACADEMY NSUKKA</span>
            <span class="brand__sub">Diligence Leads to Excellence</span>
          </span>
        </a>

        <ul class="nav__links" id="navLinks">
          <?php foreach ($NAV_ITEMS as $file => $label): ?>
            <li>
              <a href="<?= e(url($file)) ?>"<?= $_cur === $file ? ' class="is-active" aria-current="page"' : '' ?>><?= e($label) ?></a>
            </li>
          <?php endforeach; ?>
          <li class="nav__dropdown">
            <button class="nav__dropdown-toggle" aria-haspopup="true" aria-expanded="false"
                    <?= array_key_exists($_cur, $NAV_PORTALS) ? ' aria-current="page"' : '' ?>>
              Portals
              <svg class="nav__chevron" width="10" height="6" viewBox="0 0 10 6" fill="none" aria-hidden="true">
                <path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
            <ul class="nav__dropdown-menu">
              <?php foreach ($NAV_PORTALS as $pFile => $pLabel): ?>
                <li><a href="<?= e(url($pFile)) ?>"<?= $_cur === $pFile ? ' class="is-active"' : '' ?>><?= e($pLabel) ?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li class="mobile-cta"><a class="btn btn--gold" href="<?= e(url('admission.php')) ?>">Apply for Admission</a></li>
        </ul>

        <div class="nav__cta">
          <a class="btn btn--gold" href="<?= e(url('admission.php')) ?>">Apply Now</a>
          <button class="nav__toggle" id="navToggle" aria-label="Toggle navigation menu"
                  aria-controls="navLinks" aria-expanded="false">
            <span></span>
          </button>
        </div>
        </nav>
      </div>
    </div>
  </header>

  <main id="main">
