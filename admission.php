<?php
require_once 'config.php';
$page_title = 'Admission';
$page_desc  = 'Apply to ' . SCHOOL_NAME . '. Learn about our admission process, requirements and how to enrol your child.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero__inner">
      <div class="breadcrumb"><a href=".">Home</a> / Admission</div>
      <h1>Admission</h1>
      <p>Give your child a balanced, qualitative Christian education. Here's how to join Shalom Academy.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Admission options</span>
      <h2>Apply online or submit at the school</h2>
      <p>The live school process gives parents two clear routes: send documents by email or bring them to the bursar's office.</p>
    </div>
    <div class="grid grid-2">
      <article class="card admission-card">
        <div class="card__icon" aria-hidden="true">01</div>
        <h3>Online Submission</h3>
        <p>Download and complete the admission form, then make a payment of N3000 to Onu Wilfred &amp; Victoria, Account Number: 3001405191, First Bank Plc.</p>
        <p>Scan and send the completed form and bank payment teller to <a href="mailto:<?= e(SCHOOL_EMAIL) ?>"><?= e(SCHOOL_EMAIL) ?></a>.</p>
      </article>
      <article class="card admission-card">
        <div class="card__icon" aria-hidden="true">02</div>
        <h3>Offline Submission</h3>
        <p>Download and complete the admission form, then make a payment of N3000 to Onu Wilfred &amp; Victoria, Account Number: 3001405191, First Bank Plc.</p>
        <p>Bring the completed form and bank payment teller to the bursar's office at Shalom Academy Nsukka.</p>
      </article>
    </div>
    <div class="download-panel mt-3">
      <div>
        <span class="eyebrow">Admission form</span>
        <h3>Download the official admission form</h3>
        <p>Thanks for your interest in getting admitted to Shalom Academy Nsukka. Call <?= e(SCHOOL_PHONES) ?> for details.</p>
      </div>
      <a class="btn btn--gold btn--lg" href="<?= e(ADMISSION_FORM_URL) ?>" download>Download Admission Form</a>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="container">
    <div class="split">
      <div class="prose">
        <span class="eyebrow">Simple steps to follow</span>
        <h2>Use your reference number for the entrance exam</h2>
        <p>After submitting the admission form and completing payment, the admissions team confirms the application and shares the reference number needed to unlock the online entrance examination.</p>
        <ul class="checklist">
          <li>Download and complete the admission form with the candidate's details.</li>
          <li>Send the completed form and proof of payment to the admissions office.</li>
          <li>Wait for confirmation and keep the reference number sent to you.</li>
          <li>Enter the reference number here to start the LinkSkool entrance examination.</li>
        </ul>
        <p class="mt-3"><strong>Need help?</strong> Call <a href="tel:<?= e(preg_replace('/\s+/', '', SCHOOL_PHONE_PRIMARY)) ?>"><?= e(SCHOOL_PHONE_PRIMARY) ?></a> or visit our campus.</p>
      </div>

      <div>
        <div class="form-shell">
          <h2 style="font-size:1.4rem;margin-bottom:.4rem;">Entrance examination</h2>
          <p style="color:var(--muted);font-size:.95rem;margin-bottom:1.3rem;">Enter the reference number sent after your application payment is confirmed.</p>

          <form action="<?= e(PORTAL_ENTRANCE_EXAM) ?>" method="post" id="checkStatus" name="checkStatus" enctype="multipart/form-data">
            <div class="field">
              <label for="chkReference">Reference Number <span class="req">*</span></label>
              <input class="input input--exam" type="text" id="chkReference" name="chkReference" required autocomplete="off" inputmode="text" placeholder="Enter your reference number">
              <span class="hint">Use the exact reference number supplied by admissions or LinkSkool.</span>
            </div>
            <input name="dkb" type="hidden" value="<?= e(PORTAL_ENTRANCE_EXAM_DKB) ?>">
            <input name="fld" type="hidden" value="<?= e(PORTAL_ENTRANCE_EXAM_FLD) ?>">
            <input name="_checkStatus" type="hidden" id="_checkStatus" value="1">
            <div class="field-row">
              <button class="btn btn--primary btn--block btn--lg" type="submit">Start Examination</button>
              <button class="btn btn--ghost btn--block btn--lg" type="reset">Clear</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section--tight">
  <div class="container">
    <div class="cta-band">
      <h2>Ready for the entrance exam?</h2>
      <p>Download the form, complete payment, then use your confirmed reference number to begin the examination.</p>
      <div class="hero__cta">
        <a class="btn btn--gold btn--lg" href="<?= e(ADMISSION_FORM_URL) ?>" download>Download Form</a>
        <a class="btn btn--ghost-light btn--lg" href="#checkStatus">Enter Reference Number</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
