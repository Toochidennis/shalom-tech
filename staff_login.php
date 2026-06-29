<?php
// Staff login — submits to the LinkSkool staff portal.
require_once 'config.php';
$page_title = 'Staff Login';
$page_desc  = 'Restricted staff portal for ' . SCHOOL_NAME . ', powered by LinkSkool.';
$page_robots = 'noindex, follow';
$staff_action = PORTAL_STAFF_LOGIN;
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner">
      <div class="breadcrumb"><a href=".">Home</a> / Staff Login</div>
      <h1>Staff Login</h1>
      <p>This section is strictly restricted to members of staff of <?= e(SCHOOL_NAME) ?>.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="split">
      <div class="prose">
        <span class="eyebrow">Staff portal</span>
        <h2>Members of staff only</h2>
        <p>This section is strictly restricted to the members of staff of <?= e(SCHOOL_NAME) ?> who have been duly issued their username and password.</p>
        <div class="alert alert--note" role="note">
          New to staff? If you have not yet received your credentials, please obtain your
          username and password from the school administration.
        </div>
        <ul class="checklist mt-3">
          <li>Use the username and password issued to you.</li>
          <li>Keep your login details private.</li>
          <li>Always log out when you finish.</li>
        </ul>
      </div>

      <div>
        <div class="form-shell">
          <h2 style="font-size:1.4rem;margin-bottom:.3rem;">Sign in</h2>
          <p style="color:var(--muted);font-size:.95rem;margin-bottom:1.3rem;">Powered by LinkSkool.</p>

          <form action="<?= e($staff_action) ?>" method="post" id="form2" name="form2" novalidate>
            <div class="field">
              <label for="username">Username <span class="req">*</span></label>
              <input class="input" type="text" id="username" name="username" required
                     autocomplete="username" placeholder="Enter your staff username">
            </div>
            <div class="field">
              <label for="password">Password <span class="req">*</span></label>
              <input class="input" type="password" id="password" name="password" required
                     autocomplete="current-password" placeholder="Enter your password">
            </div>
            <input name="dkb" type="hidden" id="dkb" value="shalom">
            <input name="fld" type="hidden" id="fld" value="shalom">
            <div class="field-row">
              <button class="btn btn--navy btn--block btn--lg" type="submit" name="button2" id="button2" value="Login">Log in</button>
              <button class="btn btn--ghost btn--block btn--lg" type="reset" name="button3" id="button3" value="Reset">Reset</button>
            </div>
            <p class="hint" style="margin-top:1rem;text-align:center;color:var(--muted);">
              Strictly for members of staff only.
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
