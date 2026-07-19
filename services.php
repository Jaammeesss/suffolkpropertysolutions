<?php
declare(strict_types=1);

$year = (int) date('Y');
$pageTitle = 'Services | Suffolk Property Solutions';
$pageDescription = 'Handyman and property maintenance services across Suffolk and Norfolk. General repairs, home improvements, fencing, man with a van and landlord maintenance.';

include 'includes/header.php';
?>

    <main>
      <section class="container">
        <div class="page-hero">
          <span class="eyebrow">What we offer</span>
          <h1>A Complete Range of Handyman &amp; <span>Property Services.</span></h1>
          <p>Every property has different needs, so I offer a flexible service covering everything from small household tasks through to larger maintenance and improvement projects.</p>
        </div>
      </section>

      <section class="container" style="padding-top:0">
        <div class="services-full">
          <article class="service-full-card">
            <div class="icon">&#128295;</div>
            <h3>General Handyman Services</h3>
            <p>For all those jobs that need doing around your home &mdash; shelving, furniture assembly, picture hanging, door repairs and general household maintenance.</p>
            <a class="service-link" href="/services/handyman">View service &rarr;</a>
          </article>
          <article class="service-full-card">
            <div class="icon">&#127968;</div>
            <h3>Property Maintenance</h3>
            <p>Practical repairs completed with a construction background. Plasterboard, wall repairs, carpentry, storage solutions and small renovation work.</p>
            <a class="service-link" href="/services/property-maintenance">View service &rarr;</a>
          </article>
          <article class="service-full-card">
            <div class="icon">&#128292;</div>
            <h3>Wall Repairs</h3>
            <p>Plasterboard repairs, filling, skimming and making good. Professional wall repairs leaving a clean, ready-to-decorate finish.</p>
            <a class="service-link" href="/services/wall-repairs">View service &rarr;</a>
          </article>
          <article class="service-full-card">
            <div class="icon">&#129683;</div>
            <h3>Fencing &amp; Outdoor</h3>
            <p>Fence repairs, new fencing, gate repairs, shed assembly and general outdoor maintenance to keep your property looking its best.</p>
            <a class="service-link" href="/services/fencing">View service &rarr;</a>
          </article>
          <article class="service-full-card">
            <div class="icon">&#128296;</div>
            <h3>Home Improvements</h3>
            <p>Decorating, flooring repairs, internal carpentry, storage solutions and small renovation projects to improve your home.</p>
            <a class="service-link" href="/services/home-improvements">View service &rarr;</a>
          </article>
          <article class="service-full-card">
            <div class="icon">&#128665;</div>
            <h3>Man With a Van</h3>
            <p>Furniture collection, house move assistance, deliveries, collections and tip runs. Need help moving something large or awkward? I can help.</p>
            <a class="service-link" href="/services/man-with-a-van">View service &rarr;</a>
          </article>
          <article class="service-full-card">
            <div class="icon">&#128205;</div>
            <h3>Landlord Maintenance</h3>
            <p>Reliable maintenance support for landlords. Property repairs between tenants, damage repairs, furniture assembly and general upkeep.</p>
            <a class="service-link" href="/services/landlord-maintenance">View service &rarr;</a>
          </article>
        </div>
      </section>

      <section class="container">
        <div class="cta">
          <span class="eyebrow">Free, no-obligation quotes</span>
          <h2>Not Sure Which Service You Need?</h2>
          <p>Get in touch and describe what needs doing. I will advise on the best approach and provide a free quote.</p>
          <a class="btn btn-primary" href="/contact">Request a Quote &rarr;</a>
        </div>
      </section>
    </main>

    <?php include 'includes/footer.php'; ?>
