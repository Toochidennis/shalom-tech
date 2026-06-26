<?php
/**
 * config.php — Site-wide configuration for Shalom Academy Nsukka.
 *
 * Single source of truth for school facts, navigation, contact details and
 * external portal integration. Pages and shared includes read from here so
 * content is never duplicated/hardcoded across files.
 *
 * SOURCE OF TRUTH: facts below were taken from the live site
 * (https://www.shalomacademy.net/). Do not invent school facts.
 *
 * PORTAL CONTRACTS: the result/staff login pages integrate with the LinkSkool
 * platform (linkschoolonline.com / linkschool.com). The exact form `action`
 * endpoints and field `name` attributes used by the live LinkSkool integration
 * MUST be confirmed against the real backend before go-live. The constants
 * below are the integration points to verify — see flags marked [VERIFY].
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
// External / partner links (from live site)
// ---------------------------------------------------------------------------
define('LINK_SSTAC',         'https://www.sstac.sch.ng');           // sister school
define('LINK_UNN',           'https://www.unn.edu.ng');             // University of Nigeria, Nsukka
define('LINK_LINKSCHOOL',    'http://www.linkschool.com');          // LinkSkool
define('LINK_LINKSCHOOL_ONLINE', 'http://www.linkschoolonline.com'); // "Powered by" portal

// ---------------------------------------------------------------------------
// LinkSkool portal integration endpoints  [VERIFY all before go-live]
// These are the form `action` targets for the result/staff login pages.
// The live site posts these to the LinkSkool platform. Until the exact
// endpoints are confirmed, they default to the LinkSkool online portal.
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
