<?php
declare(strict_types=1);

$pageTitle = $pageTitle ?? 'Suffolk Property Solutions | Handyman & Property Maintenance Suffolk & Norfolk';
$pageDescription = $pageDescription ?? 'Reliable handyman and property maintenance services across Suffolk and Norfolk. Fully insured, experienced and local.';
$year = $year ?? (int) date('Y');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
  </head>
  <body>
    <div class="page">

      <header class="site-header">
        <div class="container">
          <div class="nav">
            <a class="logo" href="/">
              <span class="logo-mark">🛠️</span>
              <span>Suffolk Property Solutions</span>
            </a>

            <nav class="nav-links" aria-label="Main navigation">
              <div class="nav-dropdown">
                <a href="/services">Services</a>
                <div class="dropdown-menu">
                  <a href="/services/handyman">Handyman Services</a>
                  <a href="/services/property-maintenance">Property Maintenance</a>
                  <a href="/services/wall-repairs">Wall Repairs</a>
                  <a href="/services/fencing">Fencing &amp; Outdoor</a>
                  <a href="/services/home-improvements">Home Improvements</a>
                  <a href="/services/man-with-a-van">Man With a Van</a>
                  <a href="/services/landlord-maintenance">Landlord Maintenance</a>
                </div>
              </div>
              <a href="/about">About</a>
              <a href="/areas">Areas Covered</a>
              <a href="/gallery">Gallery</a>
            </nav>

            <a class="btn btn-primary" href="/contact">Get a Quote</a>

            <button class="nav-toggle" aria-label="Open menu" id="navToggle">
              <span></span><span></span><span></span>
            </button>
          </div>
        </div>
      </header>

      <nav class="mobile-nav" id="mobileNav" aria-label="Mobile navigation">
        <button class="mobile-nav-close" id="mobileNavClose" aria-label="Close menu">&times;</button>
        <a href="/">Home</a>
        <a href="/services">Services</a>
        <a href="/services/handyman" class="mobile-sub">— Handyman Services</a>
        <a href="/services/property-maintenance" class="mobile-sub">— Property Maintenance</a>
        <a href="/services/wall-repairs" class="mobile-sub">— Wall Repairs</a>
        <a href="/services/fencing" class="mobile-sub">— Fencing &amp; Outdoor</a>
        <a href="/services/home-improvements" class="mobile-sub">— Home Improvements</a>
        <a href="/services/man-with-a-van" class="mobile-sub">— Man With a Van</a>
        <a href="/services/landlord-maintenance" class="mobile-sub">— Landlord Maintenance</a>
        <a href="/about">About</a>
        <a href="/areas">Areas Covered</a>
        <a href="/gallery">Gallery</a>
        <a href="/contact" class="btn btn-primary" style="margin-top:12px">Get a Quote</a>
      </nav>

      <script>
        (function () {
          var toggle = document.getElementById('navToggle');
          var nav = document.getElementById('mobileNav');
          var close = document.getElementById('mobileNavClose');
          if (toggle && nav && close) {
            toggle.addEventListener('click', function () { nav.classList.add('open'); document.body.style.overflow = 'hidden'; });
            close.addEventListener('click', function () { nav.classList.remove('open'); document.body.style.overflow = ''; });
          }
        })();
      </script>

