<?php
/**
 * Site-wide configuration for Shalom Academy Nsukka.
 *
 * Central place for school details, navigation, contact information and the
 * LinkSkool portal endpoints used by the result and staff-login pages.
 */

// ---------------------------------------------------------------------------
// School identity
// ---------------------------------------------------------------------------
define('SCHOOL_NAME',        'Shalom Academy Nsukka');
define('SCHOOL_SHORT',       'Shalom Academy');
define('SCHOOL_TAGLINE',     'Balanced, qualitative Christian education at minimum cost');
define('SCHOOL_FOUNDED',     '1999'); // Founded January 1, 1999
define('SCHOOL_MOTTO',       'Diligence Leads to Excellence');

// ---------------------------------------------------------------------------
// SEO / canonical
// Production base URL (no trailing slash). Used to build absolute canonical,
// Open Graph and structured-data URLs. Update if the live domain changes.
// ---------------------------------------------------------------------------
define('SITE_URL',           'https://www.shalomacademy.net');
define('SITE_LOCALE',        'en_NG');
define('DEFAULT_OG_IMAGE',   'assets/img/hero.jpg'); // social-share preview image
define('THEME_COLOR',        '#0b2a4a');             // matches header brand navy

// ---------------------------------------------------------------------------
// Contact details (from live site)
// ---------------------------------------------------------------------------
define('SCHOOL_ADDRESS',     'No. 50 Old Enugu Ezike Road, Off Odenigbo Express, Nsukka, Enugu State, Nigeria');
define('SCHOOL_PHONES',      '08035320213, 08037786597, 09099256745');
define('SCHOOL_PHONE_PRIMARY', '08035320213');
define('SCHOOL_EMAIL',       'shalomacademy17@gmail.com');
define('SCHOOL_HOURS',       'Mon-Fri: 8:00am - 4:00pm');

// ---------------------------------------------------------------------------
// Social media (from live site)
// ---------------------------------------------------------------------------
define('SOCIAL_FACEBOOK',    'https://www.facebook.com/Shalom-Academy-Nsukka-1403535919886300');
define('SOCIAL_YOUTUBE',     'https://www.youtube.com/channel/UC7ZE8PH5giPNxiCbjDvS7Ow');

// ---------------------------------------------------------------------------
// External / partner links
// ---------------------------------------------------------------------------
define('LINK_SSTAC',         'https://www.sstac.sch.ng');           // sister school
define('LINK_UNN',           'https://www.unn.edu.ng');             // University of Nigeria, Nsukka
define('LINK_LINKSCHOOL',    'http://www.linkschool.com');
define('LINK_LINKSCHOOL_ONLINE', 'http://www.linkschoolonline.com');

// ---------------------------------------------------------------------------
// LinkSkool portal endpoints — form action targets for the result and
// staff-login pages.
// ---------------------------------------------------------------------------
define('PORTAL_RESULT_NSUKKA', 'https://www.linkskool.com/newportal/process_candidate_login.php');
define('PORTAL_RESULT_OBOLLO', 'https://www.linkskool.com/newportal/process_candidate_login.php');
define('PORTAL_STAFF_LOGIN',   'http://www.linkskool.com/newportal/process_login.php');
define('PORTAL_ADMISSION_LOGIN', 'http://www.linkskool.com/portal/process_entry.php');
define('PORTAL_ENTRANCE_EXAM',  'https://linkskool.net/newportal/process_entry2.php');
define('PORTAL_ENTRANCE_EXAM_DKB', 'shalomtech');
define('PORTAL_ENTRANCE_EXAM_FLD', 'shalomtech');
define('ADMISSION_FORM_URL',   'assets/img/admission-form.jpg');

// ---------------------------------------------------------------------------
// Primary navigation
// ---------------------------------------------------------------------------
$NAV_ITEMS = [
    'index.php'     => 'Home',
    'about.php'     => 'About',
    'admission.php' => 'Admission',
    'news.php'      => 'News',
    'gallery.php'   => 'Gallery',
    'contact.php'   => 'Contact',
];

// Dropdown: Portals sub-menu
$NAV_PORTALS = [
    'linkschool.php'  => 'Check Result',
    'staff_login.php' => 'Staff Login',
];

/**
 * Helper: current page filename (for active nav highlighting).
 */
function current_page() {
    return basename($_SERVER['PHP_SELF']);
}

/**
 * Helper: escape output.
 */
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * Helper: clean (extensionless) link for an internal page.
 * 'about.php' => 'about', and the home page links to the site root.
 * The server maps /about back to about.php (see .htaccess / router.php).
 */
function url($file) {
    $slug = preg_replace('/\.php$/', '', $file);
    return ($slug === 'index') ? '.' : $slug;
}

/**
 * Helper: build an absolute URL from a site-relative path using SITE_URL.
 */
function abs_url($path = '') {
    $path = ltrim((string) $path, '/');
    return rtrim(SITE_URL, '/') . ($path !== '' ? '/' . $path : '/');
}

/**
 * Helper: canonical (extensionless) URL for the current page.
 * The home page is canonicalised to the site root ("/").
 */
function canonical_url() {
    $page = preg_replace('/\.php$/', '', current_page());
    if ($page === 'index' || $page === '') {
        return abs_url('');
    }
    return abs_url($page);
}
