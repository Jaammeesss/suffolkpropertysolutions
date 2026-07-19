(() => {
  const cookieBanner = document.getElementById("cookieBanner");
  const acceptBtn = document.getElementById("acceptCookies");
  const declineBtn = document.getElementById("declineCookies");
  const cookieConsent = "cookieConsent";
  const cookieDuration = 365;

  if (!cookieBanner || !acceptBtn || !declineBtn) {
    return;
  }

  function checkCookieConsent() {
    const consent = localStorage.getItem(cookieConsent);
    if (!consent) {
      cookieBanner.classList.add("show");
      return;
    }

    if (
      consent === "accepted" &&
      typeof window.enableAnalytics === "function"
    ) {
      window.enableAnalytics();
    }
  }

  function saveCookieConsent(accepted) {
    const expiryDate = new Date();
    expiryDate.setDate(expiryDate.getDate() + cookieDuration);

    localStorage.setItem(cookieConsent, accepted ? "accepted" : "declined");
    localStorage.setItem(cookieConsent + "_date", expiryDate.toISOString());
    cookieBanner.classList.remove("show");
  }

  acceptBtn.addEventListener("click", () => {
    saveCookieConsent(true);
    if (typeof window.enableAnalytics === "function") {
      window.enableAnalytics();
    }
  });

  declineBtn.addEventListener("click", () => {
    saveCookieConsent(false);
  });

  document.addEventListener("DOMContentLoaded", checkCookieConsent);
})();
