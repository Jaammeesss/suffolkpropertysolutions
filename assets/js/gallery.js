(function () {
  var dialog = document.getElementById("galleryLightbox");
  if (!dialog) return;

  var preview = dialog.querySelector("img");
  var closeButton = dialog.querySelector(".gallery-lightbox-close");
  var opener = null;

  document.querySelectorAll(".gallery-item-trigger").forEach(function (button) {
    button.addEventListener("click", function () {
      var image = button.querySelector("img");
      if (!image) return;

      opener = button;
      preview.src = image.currentSrc || image.src;
      preview.alt = image.alt;
      dialog.showModal();
      closeButton.focus();
    });
  });

  closeButton.addEventListener("click", function () {
    dialog.close();
  });

  dialog.addEventListener("click", function (event) {
    if (event.target === dialog) dialog.close();
  });

  dialog.addEventListener("close", function () {
    preview.removeAttribute("src");
    if (opener) opener.focus();
  });
})();
