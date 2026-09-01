<?php
declare(strict_types=1);

$year = (int) date('Y');
$pageTitle = 'Wall Repairs in Suffolk | Suffolk Property Solutions';
$pageDescription = 'Professional wall repairs in Suffolk including plasterboard patching, crack repairs and making good. Clean, ready-to-decorate finishes. Get your free quote.';

include dirname(__DIR__) . '/includes/header.php';
?>

    <main>
      <section class="container">
        <div class="breadcrumb"><a href="/services">Services</a> <span>/</span> Wall Repairs</div>
        <div class="page-hero">
          <span class="eyebrow">Wall &amp; Plaster Repairs</span>
          <h1>Wall <span>Repairs.</span></h1>
          <p>Professional wall repairs leaving a clean, smooth, ready-to-decorate finish. From small patches to larger areas of damage.</p>
        </div>
      </section>

      <section class="container" style="padding-top:0">
        <div class="service-sub-grid">
          <div>
            <h2 style="margin-bottom:16px">Making good</h2>
            <p>Holes, cracks, dents and damaged plasterboard are all common in busy homes. Whether caused by general wear and tear, previous fixtures or accidental damage, I can repair and reinstate walls to a clean, smooth finish.</p>
            <p>All repairs are blended into surrounding surfaces and left ready for decorating.</p>
            <a class="btn btn-primary" href="/contact">Get a Quote &rarr;</a>
          </div>
          <div class="service-sub-card">
            <h3>Services include:</h3>
            <ul class="service-detail-list">
              <li>Plasterboard patching and repairs</li>
              <li>Hole filling and making good</li>
              <li>Crack repairs</li>
              <li>Damage repair after fixture removal</li>
              <li>Preparation for decorating</li>
              <li>Textured surface matching</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="container">
        <div class="cta">
          <span class="eyebrow">Suffolk &amp; Norfolk</span>
          <h2>Wall Looking Tired?</h2>
          <p>Get in touch for a free quote on your wall repair project.</p>
          <a class="btn btn-primary" href="/contact">Request a Quote &rarr;</a>
        </div>
      </section>
    </main>

    <?php include dirname(__DIR__) . '/includes/footer.php'; ?>
