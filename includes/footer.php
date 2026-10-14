<?php $year = $year ?? (int) date('Y'); ?>
    <footer>
      <div class="container footer-inner">
        <div class="footer-top">
          <div class="footer-brand">
            <a class="logo" href="/">
              <img class="logo-img" src="/assets/images/suffolkpropertysolutionslogo.png" alt="Suffolk Property Solutions logo" />
              <span>Suffolk Property Solutions</span>
            </a>
            <p>Reliable handyman &amp; property maintenance services across Suffolk and Norfolk.</p>
          </div>

          <div class="footer-links">
            <div class="footer-nav-group">
              <strong>Services</strong>
              <a href="/services/handyman">Handyman Services</a>
              <a href="/services/property-maintenance">Property Maintenance</a>
              <a href="/services/wall-repairs">Wall Repairs</a>
              <a href="/services/fencing">Fencing &amp; Outdoor</a>
              <a href="/services/home-improvements">Home Improvements</a>
              <a href="/services/man-with-a-van">Man With a Van</a>
              <a href="/services/landlord-maintenance">Landlord Maintenance</a>
            </div>
            <div class="footer-nav-group">
              <strong>Company</strong>
              <a href="/">Home</a>
              <a href="/about">About</a>
              <a href="/areas">Areas Covered</a>
              <a href="/gallery">Gallery</a>
              <a href="/contact">Contact</a>
              <a href="https://www.mybuilder.com/profile/suffolk-property-solutions" target="_blank" rel="noopener noreferrer">MyBuilder Profile</a>
            </div>
          </div>
        </div>

        <div class="footer-bottom">
          <p>&copy; <?= $year ?> Suffolk Property Solutions. All rights reserved.</p>
          <nav aria-label="Footer legal links">
            <a href="/privacy-policy">Privacy Policy</a>
          </nav>
        </div>
      </div>
    </footer>

    <div id="cookieBanner" class="cookie-banner">
      <div class="cookie-banner-content">
        <div class="cookie-banner-text">
          <p>We use cookies to improve your experience. By continuing to browse this site you agree to our use of cookies. <a href="/privacy-policy">Learn more</a>.</p>
        </div>
        <div class="cookie-banner-buttons">
          <button class="btn-accept" id="acceptCookies">Accept</button>
          <button class="btn-decline" id="declineCookies">Decline</button>
        </div>
      </div>
    </div>

    <script src="/assets/js/cookie.js" defer></script>
  </body>
</html>
