# Shalom Academy Nsukka — Website (bootstrapped redesign)

A modern, responsive, **plain-PHP** website for Shalom Academy Nsukka. No build
step, no framework, no SPA — just PHP includes + one CSS file + a tiny JS file.
Runs on any standard PHP host (Apache/Nginx + PHP 7.4+).

## Run locally

```bash
php -S localhost:8000      # then open http://localhost:8000/index.php
```

## Structure

```
config.php                 All school facts, nav, contact, portal endpoints (single source of truth)
index.php                  Homepage
about.php  admission.php  contact.php  gallery.php  news.php
linkschool.php             Check Result — Nsukka  (LinkSkool)
linkschool_obollo.php      Check Result — Obollo  (LinkSkool)
staff_login.php            Staff Login            (LinkSkool)
includes/
  header.php               <head> + sticky responsive navbar (mobile hamburger)
  footer.php               Footer + scripts
  result_portal.php        Shared result-check form (used by both linkschool pages)
assets/
  css/style.css            The whole design system
  js/main.js               Mobile nav only (site works without JS)
  img/                     Optional images (every <img> has a graceful fallback)
  img/gallery/             Drop photos here -> they appear on gallery.php automatically
```

## Editing content

- **School facts / contact / phones / social / portal URLs:** edit `config.php` only.
- **Gallery:** drop image files into `assets/img/gallery/` — no code change needed.
- **News:** edit the `$news` array in `news.php` (or wire it to a DB/CMS).

## Backend contracts preserved from the live site

This site was bootstrapped from the public live site, which is backed by the
**LinkSkool** platform. The visible redesign keeps the live form actions,
field names, IDs, submit names, and hidden school codes:

| Page | Constant / endpoint | Active payload |
|------|---------------------|----------------|
| `linkschool.php` | `PORTAL_RESULT_NSUKKA` | `username`, `password`, submit `login` or `forgetpass`, hidden `dkb=shalom`, `fld=shalom` |
| `linkschool_obollo.php` | `PORTAL_RESULT_OBOLLO` | `username`, `password`, submit `login` or `forgetpass`, hidden `dkb=shalomobollo`, `fld=shalomobollo` |
| `staff_login.php` | `PORTAL_STAFF_LOGIN` | `username`, `password`, submit `button2`, reset `button3`, hidden `dkb=shalom`, `fld=shalom` |
| `admission.php` | `PORTAL_ADMISSION_LOGIN` | `serial`, `security`, submit `button2`, reset `button3`, hidden `dkb=shalom`, `fld=shalom` |
| `contact.php` | `process.php` | AJAX-compatible POST keys `firstName`, `lastName`, `email`, `message` |

`process.php` currently validates the contact payload and returns a plain-text
response; wire it to production mail/database delivery when those credentials
are available.

## Design system at a glance

- Palette: deep navy + white + soft cream + refined gold accents
- Fonts: Lora (headings) + Inter (body), via Google Fonts
- Reusable: buttons, cards, portal cards, news cards, gallery grid, forms,
  page heroes, CTA bands, alerts — all defined once in `style.css`
- Responsive breakpoints at 980 / 860 (mobile nav) / 680px
- Accessibility: skip link, semantic landmarks, labelled inputs, visible focus
  states, ARIA on the mobile toggle, `prefers-reduced-motion` support
