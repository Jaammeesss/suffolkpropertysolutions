<?php
declare(strict_types=1);

$year = (int) date('Y');
$pageTitle = 'About | Suffolk Property Solutions';
$pageDescription = 'About Suffolk Property Solutions. A reliable handyman and property maintenance service for homeowners and landlords across Suffolk and Norfolk.';

include 'includes/header.php';
?>

    <main>
      <section class="container">
        <div class="page-hero">
          <span class="eyebrow">About us</span>
          <h1>About Suffolk Property <span>Solutions.</span></h1>
          <p>Suffolk Property Solutions was created to provide homeowners and landlords with a reliable alternative to waiting weeks for larger contractors to complete smaller jobs.</p>
        </div>
      </section>

      <section class="container" style="padding-top:0">
        <div class="about-split">
          <div>
            <h2 style="margin-bottom:18px">The Story</h2>
            <p>Suffolk Property Solutions was created to provide homeowners and landlords with a reliable alternative to waiting weeks for larger contractors to complete smaller jobs.</p>
            <p>With a background in construction and experience across a wide range of projects, I offer a practical, hands-on approach to property maintenance.</p>
            <p>I believe good service comes down to three things: turning up when promised, doing the job properly, and treating every property as if it were my own.</p>
            <p>Whether you need a quick repair, ongoing maintenance or help improving your home, I am always happy to discuss your requirements.</p>
            <a class="btn btn-primary" href="/contact">Get in Touch &rarr;</a>
          </div>
          <div class="values-grid">
            <div class="value-card">
              <span class="icon">&#10004;</span>
              <h3>Turning Up</h3>
              <p>I turn up when promised. No vague time windows or last-minute cancellations.</p>
            </div>
            <div class="value-card">
              <span class="icon">&#128296;</span>
              <h3>Doing It Right</h3>
              <p>Every job is completed to a professional standard, however large or small.</p>
            </div>
            <div class="value-card">
              <span class="icon">&#127968;</span>
              <h3>Your Property</h3>
              <p>I treat every property with the same care and respect as if it were my own home.</p>
            </div>
            <div class="value-card">
              <span class="icon">&#128172;</span>
              <h3>Honest Advice</h3>
              <p>If a job needs a specialist trade, I will always be upfront and advise accordingly.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="container">
        <div class="banner">
          <div class="banner-copy">
            <span class="eyebrow">Construction background</span>
            <h2>More Than Just a Handyman.</h2>
            <p>Many handyman services focus only on small jobs. Suffolk Property Solutions brings experience from the construction industry, giving a wider understanding of how properties are built, repaired and improved.</p>
            <p style="margin-top:12px;color:rgba(255,255,255,0.72)">From the foundations and first stages of a project through to the final finishing touches, I have experience working across different areas of construction. This means I can approach jobs with practical knowledge, spot potential issues early and provide solutions that are built to last.</p>
          </div>
          <div aria-hidden="true" class="photo-grid">
            <div class="fake-photo">&#128296;</div>
            <div class="fake-photo">&#127968;</div>
          </div>
        </div>
      </section>

      <section class="container">
        <div class="cta">
          <span class="eyebrow">Based in Suffolk</span>
          <h2>Ready to Get Started?</h2>
          <p>Whether you need a quick repair, a list of odd jobs or help with a larger project, get in touch for a free, no-obligation quote.</p>
          <a class="btn btn-primary" href="/contact">Request a Quote &rarr;</a>
        </div>
      </section>
    </main>

    <?php include 'includes/footer.php'; ?>
