<?php
/**
 * includes/footer.php — shared footer + closing tags + script.
 */
if (!defined('SCHOOL_NAME')) { require_once __DIR__ . '/../config.php'; }
?>
  </main>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-about">
          <div class="footer-brand">
            <span class="brand__logo" aria-hidden="true"><img src="assets/img/school-logo.png" alt=""></span>
            <span class="brand__text">
              <span class="brand__name">SHALOM ACADEMY NSUKKA</span>
              <span class="brand__sub">Nsukka, Enugu State</span>
            </span>
          </div>
          <p><?= e(SCHOOL_NAME) ?> provides a refined Christian secondary education that blends academic excellence, moral integrity and leadership formation.</p>
          <div class="social-row">
            <a href="<?= e(SOCIAL_FACEBOOK) ?>" target="_blank" rel="noopener" aria-label="Facebook">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
            </a>
            <a href="<?= e(SOCIAL_YOUTUBE) ?>" target="_blank" rel="noopener" aria-label="YouTube">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29.94 29.94 0 0 0 1 12a29.94 29.94 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.94 2C5.12 20 12 20 12 20s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2A29.94 29.94 0 0 0 23 12a29.94 29.94 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98" fill="#0f172a"/></svg>
            </a>
          </div>
        </div>

        <div>
          <h4>Explore</h4>
          <ul class="footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="admission.php">Admission</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>

        <div>
          <h4>Portals</h4>
          <ul class="footer-links">
            <li><a href="linkschool.php">Check Result</a></li>
            <li><a href="staff_login.php">Staff Login</a></li>
            <li><a href="<?= e(LINK_LINKSCHOOL) ?>" target="_blank" rel="noopener">LinkSkool</a></li>
            <li><a href="<?= e(LINK_SSTAC) ?>" target="_blank" rel="noopener">Shalom Science &amp; Tech</a></li>
            <li><a href="<?= e(LINK_UNN) ?>" target="_blank" rel="noopener">University of Nigeria</a></li>
          </ul>
        </div>

        <div class="footer-contact">
          <h4>Get in Touch</h4>
          <span><?= e(SCHOOL_ADDRESS) ?></span>
          <span>
            <?php foreach (array_map('trim', explode(',', SCHOOL_PHONES)) as $ph): ?>
              <a href="tel:<?= e(preg_replace('/\s+/', '', $ph)) ?>"><?= e($ph) ?></a><br>
            <?php endforeach; ?>
          </span>
          <span><a href="mailto:<?= e(SCHOOL_EMAIL) ?>"><?= e(SCHOOL_EMAIL) ?></a></span>
        </div>
      </div>

      <div class="footer-bottom">
        <span>&copy; <?= date('Y') ?> <?= e(SCHOOL_NAME) ?>. All rights reserved.</span>
        <span>Powered by <a href="<?= e(LINK_LINKSCHOOL_ONLINE) ?>" target="_blank" rel="noopener">LinkSkool</a></span>
      </div>
    </div>
  </footer>

  <script src="assets/js/main.js" defer></script>
</body>
</html>
