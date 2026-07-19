<?php
declare(strict_types=1);

$year = (int) date('Y');
$pageTitle = 'Property Maintenance | Suffolk Property Solutions';
$pageDescription = 'Property maintenance services across Suffolk and Norfolk. Plasterboard repairs, wall repairs, internal carpentry, storage solutions and small renovation projects.';

include dirname(__DIR__) . '/includes/header.php';
?>

    <main>
      <section class="container">
        <div class="breadcrumb"><a href="/services">Services</a> <span>/</span> Property Maintenance</div>
        <div class="page-hero">
          <span class="eyebrow">Repairs &amp; Improvements</span>
          <h1>Home Repairs &amp; <span>Improvements.</span></h1>
          <p>Practical repairs completed with a construction background. From plasterboard to carpentry, every job is approached with the knowledge to get it right.</p>
        </div>
      </section>

      <section class="container" style="padding-top:0">
        <div class="service-sub-grid">
          <div>
            <h2 style="margin-bottom:16px">Repairs done properly</h2>
            <p>With experience across multiple areas of construction including groundwork, first fix, second fix and finishing work, I bring practical knowledge and a professional approach to every repair and improvement job.</p>
            <p>Whether it is a single repair or a list of improvements, every job is completed to a high standard with minimal disruption.</p>
            <a class="btn btn-primary" href="/contact">Get a Quote &rarr;</a>
          </div>
          <div class="service-sub-card">
            <h3>Services include:</h3>
            <ul class="service-detail-list">
              <li>Plasterboard repairs</li>
              <li>Wall repairs and making good</li>
              <li>Decorating and finishing work</li>
              <li>Internal carpentry</li>
              <li>Storage solutions</li>
              <li>Small renovation projects</li>
              <li>Flooring repairs</li>
              <li>Skirting and architrave</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="container">
        <div class="cta">
          <span class="eyebrow">Suffolk &amp; Norfolk</span>
          <h2>Need a Repair?</h2>
          <p>Get in touch for a free, no-obligation quote.</p>
          <a class="btn btn-primary" href="/contact">Request a Quote &rarr;</a>
        </div>
      </section>
    </main>

    <?php include dirname(__DIR__) . '/includes/footer.php'; ?>
