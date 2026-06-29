<?php
require_once 'config.php';
$page_title = 'Contact Us';
$page_desc  = 'Contact ' . SCHOOL_NAME . ' in Nsukka, Enugu State. Address, phone numbers and an enquiry form.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner">
      <div class="breadcrumb"><a href=".">Home</a> / Contact Us</div>
      <h1>Contact Us</h1>
      <p>We'd love to hear from you. Reach out with any questions about admissions, results or visiting our campus.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="split">
      <div>
        <span class="eyebrow">Get in touch</span>
        <h2>Talk to Shalom Academy</h2>
        <p>You are required to fill all the fields in our contact form. Please re-check your email address before submitting.</p>
        <p>You can check your inbox within 72 hours of receiving this message for our feedback.</p>
        <ul class="info-list mt-3">
          <li>
            <span class="ico" aria-hidden="true">📍</span>
            <div><div class="k">Address</div><div class="v"><?= e(SCHOOL_ADDRESS) ?></div></div>
          </li>
          <li>
            <span class="ico" aria-hidden="true">📞</span>
            <div><div class="k">Phone</div>
              <div class="v">
                <?php foreach (array_map('trim', explode(',', SCHOOL_PHONES)) as $ph): ?>
                  <a href="tel:<?= e(preg_replace('/\s+/', '', $ph)) ?>"><?= e($ph) ?></a><br>
                <?php endforeach; ?>
              </div>
            </div>
          </li>
          <li>
            <span class="ico" aria-hidden="true">✉️</span>
            <div><div class="k">Email</div><div class="v"><a href="mailto:<?= e(SCHOOL_EMAIL) ?>"><?= e(SCHOOL_EMAIL) ?></a></div></div>
          </li>
          <li>
            <span class="ico" aria-hidden="true">🌐</span>
            <div><div class="k">Follow us</div>
              <div class="v">
                <a href="<?= e(SOCIAL_FACEBOOK) ?>" target="_blank" rel="noopener">Facebook</a> ·
                <a href="<?= e(SOCIAL_YOUTUBE) ?>" target="_blank" rel="noopener">YouTube</a>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div>
        <div class="form-shell">
          <h2 style="font-size:1.4rem;margin-bottom:.4rem;">Send us a mail</h2>
          <p style="color:var(--muted);font-size:.95rem;margin-bottom:1.3rem;">This form preserves the live site's contact payload: firstName, lastName, email and message.</p>

          <div class="alert alert--success" id="dialog1" role="status" hidden>
            <p></p>
          </div>

          <form data-role="validator" action="javascript:;" id="contactLiveForm" novalidate>
            <div class="field">
              <label for="firstName">First Name <span class="req">*</span></label>
              <input class="input" type="text" id="firstName" name="firstName" required placeholder="First name">
            </div>
            <div class="field">
              <label for="lastName">Last Name <span class="req">*</span></label>
              <input class="input" type="text" id="lastName" name="lastName" required placeholder="Last name">
            </div>
            <div class="field">
              <label for="email">Email Address <span class="req">*</span></label>
              <input class="input" type="text" id="email" name="email" required placeholder="you@example.com">
            </div>
            <div class="field">
              <label for="message">Message <span class="req">*</span></label>
              <textarea class="textarea" id="message" name="message" required placeholder="How can we help?"></textarea>
            </div>
            <input class="btn btn--primary btn--block btn--lg" id="send" type="submit" value="Send">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section--tight">
  <div class="container">
    <div class="map-embed">
      <iframe title="Map showing the location of Shalom Academy Nsukka"
        src="https://www.google.com/maps?q=Nsukka%2C+Enugu+State%2C+Nigeria&output=embed"
        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
