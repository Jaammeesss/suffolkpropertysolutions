<?php
declare(strict_types=1);

$pageTitle = $pageTitle ?? 'Handyman Services in Suffolk | Suffolk Property Solutions';
$pageDescription = $pageDescription ?? 'Reliable handyman and property maintenance in Suffolk for homes and landlords. Fully insured local service with clear quotes and trusted workmanship.';
$year = $year ?? (int) date('Y');

$siteUrl = 'https://suffolkpropertysolutions.co.uk';
$siteName = 'Suffolk Property Solutions';
$requestPath = rtrim((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
$canonicalUrl = $canonicalUrl ?? $siteUrl . ($requestPath === '' ? '/' : $requestPath);
$ogImage = $ogImage ?? $siteUrl . '/assets/images/suffolkpropertysolutionslogo.png';
$robots = $robots ?? 'index, follow, max-image-preview:large, max-snippet:-1';

$businessSchema = [
    '@type' => ['HomeAndConstructionBusiness', 'LocalBusiness'],
    '@id' => $siteUrl . '/#business',
    'name' => $siteName,
    'url' => $siteUrl . '/',
    'logo' => $ogImage,
    'image' => $ogImage,
    'description' => 'Handyman and property maintenance services for homes and landlords across Suffolk and Norfolk.',
    'priceRange' => '$$',
    'address' => ['@type' => 'PostalAddress', 'addressRegion' => 'Suffolk', 'addressCountry' => 'GB'],
    'areaServed' => array_map(
        fn (string $n): array => ['@type' => 'AdministrativeArea', 'name' => $n],
        ['Suffolk', 'Norfolk', 'Ipswich', 'Bury St Edmunds', 'Stowmarket', 'Newmarket', 'Sudbury', 'Woodbridge', 'Felixstowe', 'Hadleigh', 'Haverhill', 'Lowestoft', 'Norwich']
    ),
    'sameAs' => ['https://www.mybuilder.com/profile/suffolk-property-solutions'],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Property services',
        'itemListElement' => array_map(
            fn (string $n): array => ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $n]],
            ['Handyman Services', 'Property Maintenance', 'Wall Repairs', 'Fencing & Outdoor', 'Home Improvements', 'Man With a Van', 'Landlord Maintenance']
        ),
    ],
];

$schemaGraph = [$businessSchema, [
    '@type' => 'WebSite',
    '@id' => $siteUrl . '/#website',
    'url' => $siteUrl . '/',
    'name' => $siteName,
    'publisher' => ['@id' => $siteUrl . '/#business'],
]];

if ($requestPath !== '') {
    $crumbs = [['name' => 'Home', 'url' => $siteUrl . '/']];
    $acc = '';
    foreach (explode('/', ltrim($requestPath, '/')) as $seg) {
        $acc .= '/' . $seg;
        $crumbs[] = ['name' => ucwords(str_replace('-', ' ', $seg)), 'url' => $siteUrl . $acc];
    }
    $last = count($crumbs) - 1;
    $crumbs[$last]['name'] = trim(explode('|', $pageTitle)[0]);
    $schemaGraph[] = [
        '@type' => 'BreadcrumbList',
        'itemListElement' => array_map(
            fn (array $c, int $i): array => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c['name'], 'item' => $c['url']],
            $crumbs,
            array_keys($crumbs)
        ),
    ];
}

foreach ($extraSchema ?? [] as $node) {
    $schemaGraph[] = $node;
}

$jsonLd = json_encode(['@context' => 'https://schema.org', '@graph' => $schemaGraph], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />
    <meta name="robots" content="<?= htmlspecialchars($robots) ?>" />
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>" />
    <meta name="theme-color" content="#233c2c" />
    <meta name="geo.region" content="GB-SFK" />
    <meta name="geo.placename" content="Suffolk" />
    <link rel="icon" type="image/png" href="/assets/images/suffolkpropertysolutionslogo.png" />
    <link rel="apple-touch-icon" href="/assets/images/suffolkpropertysolutionslogo.png" />

    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:site_name" content="<?= htmlspecialchars($siteName) ?>" />
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>" />
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>" />

    <link rel="preload" as="image" href="/assets/images/suffolkpropertysolutionslogo.png" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <script type="application/ld+json"><?= $jsonLd ?></script>
  </head>
  <body>
    <a class="skip-link" href="#main">Skip to content</a>
    <div class="page">

      <header class="site-header">
        <div class="container">
          <div class="nav">
            <a class="logo" href="/">
              <img class="logo-img" src="/assets/images/suffolkpropertysolutionslogo.png" alt="Suffolk Property Solutions logo" />
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

