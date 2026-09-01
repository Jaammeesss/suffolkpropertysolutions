<?php
declare(strict_types=1);

$year = (int) date('Y');
$pageTitle = 'Home Improvements in Suffolk | Suffolk Property Solutions';
$pageDescription = 'Home improvements in Suffolk including decorating prep, carpentry, flooring repairs and small renovations. Improve your property with a free quote today.';

include dirname(__DIR__) . '/includes/header.php';
?>

    <main>
      <section class="container">
        <div class="breadcrumb"><a href="/services">Services</a> <span>/</span> Home Improvements</div>
        <div class="page-hero">
          <span class="eyebrow">Improve your home</span>
          <h1>Home <span>Improvements.</span></h1>
          <p>From finishing touches to small renovation projects, I can help improve your home with practical workmanship backed by a construction background.</p>
        </div>
      </section>

      <section class="container" style="padding-top:0">
        <div class="service-sub-grid">
          <div>
            <h2 style="margin-bottom:16px">Your home, improved</h2>
            <p>Whether you want to refresh a room, add storage, improve flooring or carry out a small renovation, I bring the practical knowledge needed to deliver lasting results.</p>
            <p>Every improvement project is approached with attention to detail and a commitment to leaving your home looking better than before.</p>
            <a class="btn btn-primary" href="/contact">Get a Quote &rarr;</a>
          </div>
          <div class="service-sub-card">
            <h3>Services include:</h3>
            <ul class="service-detail-list">
              <li>Decorating and painting preparation</li>
              <li>Flooring repairs and laying</li>
              <li>Internal carpentry and joinery</li>
              <li>Built-in and fitted storage</li>
              <li>Skirting boards and architrave</li>
              <li>Door hanging and adjustment</li>
              <li>Small renovation projects</li>
              <li>General home improvements</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="container">
        <div class="cta">
          <span class="eyebrow">Suffolk &amp; Norfolk</span>
          <h2>Ready to Improve Your Home?</h2>
          <p>Get in touch for a free, no-obligation quote on your home improvement project.</p>
          <a class="btn btn-primary" href="/contact">Request a Quote &rarr;</a>
        </div>
      </section>
    </main>

    <?php include dirname(__DIR__) . '/includes/footer.php'; ?>
