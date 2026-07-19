<?php
declare(strict_types=1);

$year = (int) date('Y');
$pageTitle = 'Handyman Services | Suffolk Property Solutions';
$pageDescription = 'General handyman services across Suffolk and Norfolk. Shelving, furniture assembly, door repairs, picture hanging and general household maintenance.';

include dirname(__DIR__) . '/includes/header.php';
?>

    <main>
      <section class="container">
        <div class="breadcrumb"><a href="/services">Services</a> <span>/</span> Handyman Services</div>
        <div class="page-hero">
          <span class="eyebrow">General Handyman</span>
          <h1>General Handyman <span>Services.</span></h1>
          <p>For all those jobs that need doing around your home. No job too small &mdash; from a single shelf to a full list of household tasks.</p>
        </div>
      </section>

      <section class="container" style="padding-top:0">
        <div class="service-sub-grid">
          <div>
            <h2 style="margin-bottom:16px">What is included</h2>
            <p>Whether you have one job or a whole list, I can help get your home sorted. General handyman work covers a wide range of everyday household tasks that need a practical, reliable pair of hands.</p>
            <p>All work is completed to a professional standard and I leave the area clean and tidy on completion.</p>
            <a class="btn btn-primary" href="/contact">Get a Quote &rarr;</a>
          </div>
          <div class="service-sub-card">
            <h3>Services include:</h3>
            <ul class="service-detail-list">
              <li>Shelving and wall mounting</li>
              <li>Flat pack furniture assembly</li>
              <li>Picture, mirror and curtain fitting</li>
              <li>Door and handle repairs</li>
              <li>Small repairs and adjustments</li>
              <li>General household maintenance</li>
              <li>TV and shelf mounting</li>
              <li>Odd jobs and task lists</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="container">
        <div class="cta">
          <span class="eyebrow">Suffolk &amp; Norfolk</span>
          <h2>Ready to Get Your Jobs Done?</h2>
          <p>Get in touch for a free, no-obligation quote on any handyman work.</p>
          <a class="btn btn-primary" href="/contact">Request a Quote &rarr;</a>
        </div>
      </section>
    </main>

    <?php include dirname(__DIR__) . '/includes/footer.php'; ?>
