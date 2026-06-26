<?php
/**
 * linkschool.php — Check Result (Nsukka campus).
 * Result-check portal wrapper around the LinkSkool integration.
 * Route name preserved from the live site. See includes/result_portal.php.
 */
require_once 'config.php';
$page_title    = 'Check Result';
$page_desc     = 'Check your results online for ' . SCHOOL_NAME . ' (Nsukka), powered by LinkSkool.';
$portal_campus = 'Nsukka';
$portal_action = PORTAL_RESULT_NSUKKA; // [VERIFY] real LinkSkool endpoint
$portal_self   = 'linkschool.php';
$portal_school_code = 'shalom';

include 'includes/header.php';
include 'includes/result_portal.php';
include 'includes/footer.php';
