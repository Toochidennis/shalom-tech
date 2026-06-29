<?php
/**
 * Shared result-check portal UI, rendered by linkschool.php (Nsukka) and
 * linkschool_obollo.php (Obollo). The caller sets before including:
 *   $portal_campus  — e.g. 'Nsukka' or 'Obollo'
 *   $portal_action  — form action endpoint (LinkSkool)
 *   $portal_self    — this page's own filename (for breadcrumb/active state)
 */
if (!defined('SCHOOL_NAME')) { require_once __DIR__ . '/../config.php'; }
$portal_method = isset($portal_method) ? $portal_method : 'post';
$portal_school_code = isset($portal_school_code) ? $portal_school_code : 'shalom';
?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner">
      <div class="breadcrumb"><a href=".">Home</a> / Check Result<?= $portal_campus === 'Obollo' ? ' (Obollo)' : '' ?></div>
      <h1>Check Your Result<?= $portal_campus === 'Obollo' ? ' — Obollo' : '' ?></h1>
      <p>Checking your results is easy, convenient and efficient using LinkSkool. Enter your details below to continue.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="split">
      <div class="prose">
        <span class="eyebrow">How it works</span>
        <h2>Result checker — <?= e($portal_campus) ?> campus</h2>
        <p>Our school administration is optimised using the LinkSkool Educational Portal to create an easy flow of learning processes.</p>
        <ul class="checklist">
          <li>Enter your <strong>Reg No / Username</strong> in the form.</li>
          <li>Type the <strong>password / scratch-off card PIN</strong> issued to you.</li>
          <li>Remember to <strong>log out</strong> once you are done with the portal.</li>
        </ul>
        <div class="alert alert--note mt-3" role="note">
          Need a result-checker card or having trouble signing in? Please contact the school office
          on <a href="tel:<?= e(preg_replace('/\s+/', '', SCHOOL_PHONE_PRIMARY)) ?>"><?= e(SCHOOL_PHONE_PRIMARY) ?></a>.
        </div>
      </div>

      <div>
        <div class="form-shell">
          <h2 style="font-size:1.4rem;margin-bottom:.3rem;">Student result login</h2>
          <p style="color:var(--muted);font-size:.95rem;margin-bottom:1.3rem;">Powered by LinkSkool.</p>

          <form action="<?= e($portal_action) ?>" method="<?= e($portal_method) ?>" id="form2" name="form2" novalidate>
            <div class="field">
              <label for="reg_username">Registration Number / Username <span class="req">*</span></label>
              <input class="input" type="text" id="reg_no" name="username" required
                     autocomplete="username" placeholder="Enter your registration number">
            </div>
            <div class="field">
              <label for="pin">Password <span class="req">*</span></label>
              <input class="input" type="password" id="pin" name="password" required
                     autocomplete="current-password" placeholder="Enter your portal password">
            </div>
            <input name="dkb" type="hidden" id="dkb" value="<?= e($portal_school_code) ?>">
            <input name="fld" type="hidden" id="fld" value="<?= e($portal_school_code) ?>">
            <div class="field-row">
              <button class="btn btn--primary btn--block btn--lg" type="submit" name="login" id="login" value="Login">Check Result</button>
              <button class="btn btn--ghost btn--block btn--lg" type="submit" name="forgetpass" id="forgetpass" value="Forgot Password">Forgot Password</button>
            </div>
            <p class="hint" style="margin-top:1rem;text-align:center;color:var(--muted);">
              You will be securely connected to the LinkSkool portal.
            </p>
          </form>
        </div>
        <p class="text-center mt-3" style="font-size:.9rem;color:var(--muted);">
          Or visit the portal directly:
          <a href="<?= e(LINK_LINKSCHOOL_ONLINE) ?>" target="_blank" rel="noopener">linkschoolonline.com</a>
        </p>
      </div>
    </div>
  </div>
</section>
