const form = document.querySelector("[data-contact-form]");

if (form) {
  const button = form.querySelector("[data-submit-button]");
  const message = form.querySelector("[data-form-message]");
  const defaultButtonText = button ? button.textContent : "";
  const action = (form.getAttribute("action") || "").trim();
  const endpoint = action === "" || action === "#" ? "/contact.php" : action;

  function setMessage(type, text) {
    if (!message) {
      return;
    }

    message.hidden = false;
    message.textContent = text;
    message.classList.remove("success-message", "error-message");
    message.classList.add(
      type === "success" ? "success-message" : "error-message",
    );
  }

  function clearMessage() {
    if (!message) {
      return;
    }

    message.hidden = true;
    message.textContent = "";
    message.classList.remove("success-message", "error-message");
  }

  form.addEventListener("submit", async (event) => {
    event.preventDefault();
    clearMessage();

    if (button) {
      button.disabled = true;
      button.textContent = "Sending...";
    }

    try {
      const response = await fetch(endpoint, {
        method: "POST",
        headers: {
          Accept: "application/json",
        },
        body: new FormData(form),
      });

      const result = await response.json().catch(() => ({}));

      if (!response.ok) {
        setMessage("error", result.error || "Something went wrong.");
        return;
      }

      form.reset();
      setMessage("success", "Thanks. Your enquiry has been sent.");
    } catch {
      setMessage("error", "Something went wrong. Please try again.");
    } finally {
      if (button) {
        button.disabled = false;
        button.textContent = defaultButtonText;
      }
    }
  });
}
