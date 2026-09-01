<?php
declare(strict_types=1);

$year = (int) date('Y');
$pageTitle = 'Handyman Work Gallery Suffolk | Suffolk Property Solutions';
$pageDescription = 'Browse handyman and property maintenance work in Suffolk, from repairs to improvements. See our standards across homes and rentals, then request a free quote.';

include 'includes/header.php';
?>

    <main>
      <section class="container">
        <div class="page-hero">
          <span class="eyebrow">Our work</span>
          <h1>Gallery.</h1>
          <p>Photos of completed jobs will appear here. Check back soon or get in touch to discuss your own project.</p>
        </div>
      </section>

      <section class="container" style="padding-top:0">
        <div class="gallery-grid">
          <div class="gallery-placeholder"><span class="g-icon">&#128247;</span>Photos coming soon</div>
          <div class="gallery-placeholder"><span class="g-icon">&#128247;</span>Photos coming soon</div>
          <div class="gallery-placeholder"><span class="g-icon">&#128247;</span>Photos coming soon</div>
          <div class="gallery-placeholder"><span class="g-icon">&#128247;</span>Photos coming soon</div>
          <div class="gallery-placeholder"><span class="g-icon">&#128247;</span>Photos coming soon</div>
          <div class="gallery-placeholder"><span class="g-icon">&#128247;</span>Photos coming soon</div>
        </div>
      </section>

      <section class="container">
        <div class="cta">
          <span class="eyebrow">Get started</span>
          <h2>Like What You See?</h2>
          <p>Get in touch for a free, no-obligation quote on your project.</p>
          <a class="btn btn-primary" href="/contact">Request a Quote &rarr;</a>
        </div>
      </section>
    </main>

    <?php include 'includes/footer.php'; ?>
