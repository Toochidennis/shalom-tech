/* Shalom Academy — progressive enhancement scripts.
   No framework. Site works without JS; this enhances UX. */
(function () {
  'use strict';

  /* ---- Mobile nav toggle ---- */
  var toggle = document.getElementById('navToggle');
  var links  = document.getElementById('navLinks');

  if (toggle && links) {
    toggle.addEventListener('click', function () {
      var open = links.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    links.addEventListener('click', function (e) {
      if (e.target.tagName === 'A' && links.classList.contains('is-open')) {
        links.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && links.classList.contains('is-open')) {
        links.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.focus();
      }
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth > 860 && links.classList.contains('is-open')) {
        links.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* ---- Nav dropdown toggle (mobile) ---- */
  var dropdownToggle = document.querySelector('.nav__dropdown-toggle');
  var dropdownMenu   = document.querySelector('.nav__dropdown-menu');

  if (dropdownToggle && dropdownMenu) {
    dropdownToggle.addEventListener('click', function (e) {
      if (window.innerWidth <= 860) {
        e.preventDefault();
        var open = dropdownMenu.classList.toggle('is-open');
        dropdownToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      }
    });
  }

  /* ---- Header shadow on scroll ---- */
  var header = document.querySelector('.site-header');
  if (header) {
    var onScroll = function () {
      header.classList.toggle('scrolled', window.scrollY > 10);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ---- Scroll reveal animations ---- */
  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var revealItems = document.querySelectorAll('.section-head, .split, .card, .portal-card, .news-card, .gallery-item, .download-panel, .cta-band, .form-shell');

  if (!reduceMotion && 'IntersectionObserver' in window) {
    revealItems.forEach(function (item) {
      item.classList.add('reveal-ready');
    });

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

    revealItems.forEach(function (item) {
      observer.observe(item);
    });
  } else {
    revealItems.forEach(function (item) {
      item.classList.add('is-visible');
    });
  }

  /* ---- Live-site compatible contact form ---- */
  var contactForm = document.getElementById('contactLiveForm');
  var contactSend = document.getElementById('send');
  var contactDialog = document.getElementById('dialog1');

  if (contactForm && contactSend) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();

      var firstName = document.getElementById('firstName');
      var lastName = document.getElementById('lastName');
      var email = document.getElementById('email');
      var message = document.getElementById('message');

      if (!firstName.value || !lastName.value || !email.value || !message.value) {
        window.alert('please fill all the fields');
        return;
      }

      var payload = new URLSearchParams();
      payload.set('firstName', firstName.value);
      payload.set('lastName', lastName.value);
      payload.set('email', email.value);
      payload.set('message', message.value);

      fetch('process.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' },
        body: payload.toString()
      }).then(function (res) {
        return res.text();
      }).then(function (text) {
        firstName.value = '';
        lastName.value = '';
        email.value = '';
        message.value = '';
        if (contactDialog) {
          contactDialog.hidden = false;
          var body = contactDialog.querySelector('p');
          if (body) body.textContent = text;
        } else {
          window.alert(text);
        }
      }).catch(function () {
        window.alert('Message could not be sent. Please try again.');
      });
    });
  }
})();
