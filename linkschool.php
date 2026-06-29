<?php
/**
 * Check Result — Nsukka campus. Renders the shared result-check portal
 * (see includes/result_portal.php).
 */
require_once 'config.php';
$page_title    = 'Check Result';
$page_desc     = 'Check your results online for ' . SCHOOL_NAME . ' (Nsukka), powered by LinkSkool.';
$page_robots   = 'noindex, follow'; // login gateway — keep out of search index
$portal_campus = 'Nsukka';
$portal_action = PORTAL_RESULT_NSUKKA;
$portal_self   = 'linkschool.php';
$portal_school_code = 'shalom';

include 'includes/header.php';
include 'includes/result_portal.php';
include 'includes/footer.php';
