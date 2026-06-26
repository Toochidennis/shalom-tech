<?php
/**
 * linkschool_obollo.php — Check Result (Obollo campus).
 * Result-check portal wrapper around the LinkSkool integration.
 * Route name preserved from the live site. See includes/result_portal.php.
 */
require_once 'config.php';
$page_title    = 'Check Result (Obollo)';
$page_desc     = 'Check your results online for ' . SCHOOL_NAME . ' (Obollo campus), powered by LinkSkool.';
$portal_campus = 'Obollo';
$portal_action = PORTAL_RESULT_OBOLLO; // [VERIFY] real LinkSkool endpoint
$portal_self   = 'linkschool_obollo.php';
$portal_school_code = 'shalomobollo';

include 'includes/header.php';
include 'includes/result_portal.php';
include 'includes/footer.php';
