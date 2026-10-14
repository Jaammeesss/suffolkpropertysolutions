<?php
declare(strict_types=1);

$year = (int) date('Y');
$pageTitle = 'Handyman Work Gallery Suffolk | Suffolk Property Solutions';
$pageDescription = 'Browse handyman and property maintenance work in Suffolk, from repairs to improvements. See our standards across homes and rentals, then request a free quote.';

include 'includes/header.php';
?>

    <main id="main">
      <section class="container">
        <div class="page-hero">
          <span class="eyebrow">Our work</span>
          <h1>Gallery.</h1>
          <p>A selection of recent home improvement, bathroom, and outdoor projects completed by Suffolk Property Solutions.</p>
        </div>
      </section>

      <section class="container" style="padding-top:0">
        <div class="gallery-grid">
          <figure class="gallery-item">
            <button class="gallery-item-trigger" type="button">
              <img src="/assets/images/8dbf7566-eb45-4b81-8bcb-74fde31320a4.jpg" alt="Dark sideboard assembled in a living room" loading="lazy" decoding="async" />
            </button>
          </figure>
          <figure class="gallery-item">
            <button class="gallery-item-trigger" type="button">
              <img src="/assets/images/90343f4f-7fe3-4d92-9dbf-abdb7962aec0.jpg" alt="Timber garden fencing and decking project" loading="lazy" decoding="async" />
            </button>
          </figure>
          <figure class="gallery-item">
            <button class="gallery-item-trigger" type="button">
              <img src="/assets/images/a0f96df4-56d7-4f9e-b17c-8cf8d5955d19.jpg" alt="Handrail fitted beside a carpeted staircase" loading="lazy" decoding="async" />
            </button>
          </figure>
          <figure class="gallery-item">
            <button class="gallery-item-trigger" type="button">
              <img src="/assets/images/0abb02b4-a27f-4f15-8027-b15af9577f4d.jpg" alt="Bathroom renovation in progress, with tiled walls, a bath, and tools" loading="lazy" decoding="async" />
            </button>
          </figure>
          <figure class="gallery-item">
            <button class="gallery-item-trigger" type="button">
              <img src="/assets/images/143e0519-39f7-4783-a7ae-faed1db92d49.jpg" alt="Dark grey fitted kitchen cupboards against a pale green wall" loading="lazy" decoding="async" />
            </button>
          </figure>
          <figure class="gallery-item">
            <button class="gallery-item-trigger" type="button">
              <img src="/assets/images/674be76d-7e1d-4ff4-8266-48992bc8cf0f.jpg" alt="White horizontal blinds fitted to a window" loading="lazy" decoding="async" />
            </button>
          </figure>
          <figure class="gallery-item">
            <button class="gallery-item-trigger" type="button">
              <img src="/assets/images/7a7b082e-70ac-4a38-9e8c-a14874f9f5ac.jpg" alt="Dark grey wall cupboards fitted above a kitchen worktop" loading="lazy" decoding="async" />
            </button>
          </figure>
          <figure class="gallery-item">
            <button class="gallery-item-trigger" type="button">
              <img src="/assets/images/85034ec0-1d7b-437c-a6d9-6b4fe9a4ccd8.jpg" alt="Kitchen worktop and fitted dark cabinetry with open shelving" loading="lazy" decoding="async" />
            </button>
          </figure>

          <figure class="gallery-item">
            <button class="gallery-item-trigger" type="button">
              <img src="/assets/images/b53f4eaf-f4d8-4f07-8599-4c91024a27bd.jpg" alt="Tiled bathroom with a fitted bath and glass shower screen" loading="lazy" decoding="async" />
            </button>
          </figure>
          <figure class="gallery-item">
            <button class="gallery-item-trigger" type="button">
              <img src="/assets/images/d3954d4d-66b2-4ed0-99d6-5031328563f3.jpg" alt="Finished bathroom with grey wall tiles and a fitted bath" loading="lazy" decoding="async" />
            </button>
          </figure>
          <figure class="gallery-item">
            <button class="gallery-item-trigger" type="button">
              <img src="/assets/images/f30c28bd-7a4b-4208-9b24-a1c253e53bc7.jpg" alt="Timber decking installed beside a brick house" loading="lazy" decoding="async" />
            </button>
          </figure>
        </div>
      </section>

      <dialog class="gallery-lightbox" id="galleryLightbox" aria-label="Enlarged gallery image">
        <button class="gallery-lightbox-close" type="button" aria-label="Close image preview">&times;</button>
        <img alt="" />
      </dialog>

      <section class="container">
        <div class="cta">
          <span class="eyebrow">Get started</span>
          <h2>Like What You See?</h2>
          <p>Get in touch for a free, no-obligation quote on your project.</p>
          <a class="btn btn-primary" href="/contact">Request a Quote &rarr;</a>
        </div>
      </section>
    </main>

    <script src="/assets/js/gallery.js" defer></script>
    <?php include 'includes/footer.php'; ?>
