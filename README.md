# Shalom Academy Nsukka — Website

A modern, responsive website for Shalom Academy Nsukka, built in plain PHP — no
build step, no framework. It runs on any standard PHP host (Apache/Nginx, PHP 7.4+).

## Run locally

```bash
php -S localhost:8000      # then open http://localhost:8000/
```

Clean (extensionless) URLs such as `/about` and `/admission` are handled by
`.htaccess` and require Apache with `mod_rewrite`.

## Structure

```
config.php                 School details, navigation, contact info, portal endpoints
index.php                  Homepage
about.php  admission.php  contact.php  gallery.php  news.php
linkschool.php             Check Result — Nsukka
linkschool_obollo.php      Check Result — Obollo
staff_login.php            Staff Login
includes/
  header.php               <head>, SEO meta, responsive navbar
  footer.php               Footer + scripts
  result_portal.php        Shared result-check form (used by both result pages)
assets/
  css/style.css            Design system
  js/main.js               Mobile navigation
  img/                     Images
  img/gallery/             Add photos here and they appear on the gallery page
robots.txt  sitemap.xml  site.webmanifest  .htaccess
```

## Editing content

- **School details, contact, phones, social links, portal URLs:** edit `config.php`.
- **Gallery:** add image files to `assets/img/gallery/`.
- **News:** edit the `$news` array in `news.php`.

## Portal forms

The result and staff-login pages submit to the LinkSkool platform. The contact
form posts to `process.php`, which validates the submission and returns a
plain-text response.

| Page | Endpoint | Fields |
|------|----------|--------|
| `linkschool.php` | `PORTAL_RESULT_NSUKKA` | `username`, `password`, submit `login`/`forgetpass`, hidden `dkb`, `fld` |
| `linkschool_obollo.php` | `PORTAL_RESULT_OBOLLO` | `username`, `password`, submit `login`/`forgetpass`, hidden `dkb`, `fld` |
| `staff_login.php` | `PORTAL_STAFF_LOGIN` | `username`, `password`, submit `button2`, reset `button3`, hidden `dkb`, `fld` |
| `admission.php` | `PORTAL_ADMISSION_LOGIN` | `serial`, `security`, submit `button2`, reset `button3`, hidden `dkb`, `fld` |
| `contact.php` | `process.php` | `firstName`, `lastName`, `email`, `message` |

## Design system

- Palette: deep navy, white, soft cream, gold accents
- Fonts: Lora (headings) and Inter (body)
- Reusable buttons, cards, gallery grid, forms, page heroes, CTA bands and alerts
- Responsive breakpoints at 980 / 860 / 680px
- Accessibility: skip link, semantic landmarks, labelled inputs, visible focus
  states, ARIA on the mobile toggle, reduced-motion support
