<?php
declare(strict_types=1);

$year = (int) date('Y');
$pageTitle = 'Areas We Cover in Suffolk | Suffolk Property Solutions';
$pageDescription = 'See areas covered across Suffolk and nearby Norfolk for handyman and property maintenance services. Check availability and request your free quote today.';

include 'includes/header.php';
?>

    <main>
      <section class="container">
        <div class="page-hero">
          <span class="eyebrow">Where we work</span>
          <h1>Areas <span>Covered.</span></h1>
          <p>Based in Suffolk, providing handyman and property maintenance services for homeowners, landlords and local businesses throughout Suffolk and Norfolk.</p>
        </div>
      </section>

      <section class="container" style="padding-top:0">
        <div class="areas-grid">
          <div class="area-card">
            <strong>Suffolk</strong>
            <p>Our primary service area. All areas across the county covered.</p>
            <div class="area-towns">
              <span class="area-tag">Ipswich</span>
              <span class="area-tag">Bury St Edmunds</span>
              <span class="area-tag">Stowmarket</span>
              <span class="area-tag">Newmarket</span>
              <span class="area-tag">Sudbury</span>
              <span class="area-tag">Woodbridge</span>
              <span class="area-tag">Felixstowe</span>
              <span class="area-tag">Hadleigh</span>
              <span class="area-tag">Haverhill</span>
              <span class="area-tag">Lowestoft</span>
              <span class="area-tag">All Suffolk areas</span>
            </div>
          </div>
          <div class="area-card">
            <strong>Norfolk</strong>
            <p>Regular work throughout Norfolk for homeowners and landlords.</p>
            <div class="area-towns">
              <span class="area-tag">Norwich</span>
              <span class="area-tag">King&rsquo;s Lynn</span>
              <span class="area-tag">Great Yarmouth</span>
              <span class="area-tag">Diss</span>
              <span class="area-tag">Thetford</span>
              <span class="area-tag">Attleborough</span>
              <span class="area-tag">Wymondham</span>
              <span class="area-tag">All Norfolk areas</span>
            </div>
          </div>
        </div>
      </section>

      <section class="container">
        <div class="cta">
          <span class="eyebrow">Not sure if we cover you?</span>
          <h2>Just Ask.</h2>
          <p>If your area is not listed above, get in touch and I will let you know. Travel is considered for larger projects.</p>
          <a class="btn btn-primary" href="/contact">Get in Touch &rarr;</a>
        </div>
      </section>
    </main>

    <?php include 'includes/footer.php'; ?>
