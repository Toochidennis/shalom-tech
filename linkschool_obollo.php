<?php
/**
 * Check Result — Obollo campus. Renders the shared result-check portal
 * (see includes/result_portal.php).
 */
require_once 'config.php';
$page_title    = 'Check Result (Obollo)';
$page_desc     = 'Check your results online for ' . SCHOOL_NAME . ' (Obollo campus), powered by LinkSkool.';
$page_robots   = 'noindex, follow'; // login gateway — keep out of search index
$portal_campus = 'Obollo';
$portal_action = PORTAL_RESULT_OBOLLO;
$portal_self   = 'linkschool_obollo.php';
$portal_school_code = 'shalomobollo';

include 'includes/header.php';
include 'includes/result_portal.php';
include 'includes/footer.php';
