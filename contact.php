<?php
declare(strict_types=1);

const RESEND_API_KEY    = 're_Hmz2MHid_L345icjkhieartVXUg5PchfV';
const CONTACT_FROM_EMAIL = 'Suffolk Property Solutions Website <noreply@emails.signalpoint.co.uk>';
const CONTACT_TO_EMAIL   = 'enquiries@signalpoint.co.uk';

function respond(array $payload, int $status = 200): void
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($payload);
    exit;
}

function post_value(string $key): string
{
    return trim((string) ($_POST[$key] ?? ''));
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = post_value('name');
    $email   = post_value('email');
    $phone   = post_value('phone');
    $service = post_value('service');
    $message = post_value('message');
    $website = post_value('website');

    if ($website !== '') {
        respond(['success' => true]);
    }

    if ($name === '' || $email === '' || $service === '' || $message === '') {
        respond(['error' => 'Please fill in your name, email, service and message.'], 400);
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        respond(['error' => 'Please enter a valid email address.'], 400);
    }

    if (strlen($message) > 2000) {
        respond(['error' => 'Message is too long.'], 400);
    }

    if (
        RESEND_API_KEY === '' ||
        RESEND_API_KEY === 're_your_api_key_here' ||
        CONTACT_TO_EMAIL === '' ||
        CONTACT_TO_EMAIL === 'you@example.com'
    ) {
        respond(['error' => 'Email configuration is missing.'], 500);
    }

    if (!function_exists('curl_init')) {
        respond(['error' => 'The PHP cURL extension is required.'], 500);
    }

    $emailBody = trim(
        "New Suffolk Property Solutions enquiry\n\n" .
        "Name: {$name}\n" .
        "Email: {$email}\n" .
        'Phone: ' . ($phone !== '' ? $phone : 'Not provided') . "\n" .
        "Service: {$service}\n\n" .
        "Message:\n{$message}"
    );

    $subjectService = preg_replace('/[\r\n]+/', ' ', $service);

    $payload = [
        'from'     => CONTACT_FROM_EMAIL,
        'to'       => [CONTACT_TO_EMAIL],
        'reply_to' => $email,
        'subject'  => 'New enquiry (' . $subjectService . ') from ' . preg_replace('/[\r\n]+/', ' ', $name),
        'text'     => $emailBody,
        'html'     => '<pre style="font-family:Arial,sans-serif;white-space:pre-wrap">' . e($emailBody) . '</pre>',
    ];

    $ch = curl_init('https://api.resend.com/emails');

    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => [
            'Authorization: Bearer ' . RESEND_API_KEY,
            'Content-Type: application/json',
            'User-Agent: suffolk-property-solutions-php/1.0',
        ],
        CURLOPT_POSTFIELDS     => json_encode($payload),
        CURLOPT_TIMEOUT        => 15,
    ]);

    $responseBody = curl_exec($ch);
    $curlError    = curl_error($ch);
    $statusCode   = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($responseBody === false) {
        respond(['error' => $curlError ?: 'Failed to send email.'], 500);
    }

    $responseData = json_decode((string) $responseBody, true);

    if ($statusCode < 200 || $statusCode >= 300) {
        $apiMessage = is_array($responseData) ? ($responseData['message'] ?? $responseData['error'] ?? '') : '';
        respond(['error' => $apiMessage ?: 'Failed to send email.'], 500);
    }

    respond(['success' => true, 'data' => $responseData]);
}

// GET — show the contact page
$year = (int) date('Y');
$pageTitle = 'Contact | Suffolk Property Solutions';
$pageDescription = 'Get in touch with Suffolk Property Solutions for a free, no-obligation quote. Handyman and property maintenance services across Suffolk and Norfolk.';

include 'includes/header.php';
?>

    <main>
      <section class="container">
        <div class="page-hero">
          <span class="eyebrow">Free, no-obligation quotes</span>
          <h1>Let&rsquo;s Get Your Jobs Sorted.</h1>
          <p>Have a repair, improvement project or list of jobs that need completing? Get in touch with Suffolk Property Solutions today. Based in Suffolk and covering Norfolk.</p>
        </div>
      </section>

      <section class="container" style="padding-top:0">
        <div class="contact-page-grid">
          <div>
            <h2 style="margin-bottom:18px">What to expect</h2>
            <p>Send a few details about your job and I will get back to you promptly with a free, no-obligation quote.</p>
            <p>From homeowners needing a helping hand to landlords requiring reliable maintenance support, every enquiry is welcome.</p>
            <p>I cover Suffolk and Norfolk for all handyman and property maintenance work.</p>
          </div>

          <form class="contact-form" action="contact.php" method="post" data-contact-form>
            <label>
              Your Name
              <input type="text" name="name" placeholder="Your name" required />
            </label>

            <label>
              Email Address
              <input type="email" name="email" placeholder="you@example.com" required />
            </label>

            <label>
              Phone Number <span style="font-weight:400;color:var(--muted)">(optional)</span>
              <input type="tel" name="phone" placeholder="01234 567 890" />
            </label>

            <label>
              Service Required
              <select name="service" required>
                <option value="" disabled selected>Select a service</option>
                <option>General Handyman Services</option>
                <option>Home Repairs &amp; Improvements</option>
                <option>Outdoor Maintenance / Fencing</option>
                <option>Man With a Van</option>
                <option>Landlord Maintenance</option>
                <option>Other / Not Sure</option>
              </select>
            </label>

            <label>
              Message
              <textarea name="message" rows="5" placeholder="Describe your job or list of tasks..." required></textarea>
            </label>

            <label class="hidden-field" aria-hidden="true">
              Website
              <input type="text" name="website" tabindex="-1" autocomplete="off" />
            </label>

            <button type="submit" class="btn btn-primary" data-submit-button>Send Enquiry</button>
            <p class="form-message" data-form-message aria-live="polite" hidden></p>
          </form>
        </div>
      </section>
    </main>

    <script src="/assets/js/contact.js" defer></script>
    <?php include 'includes/footer.php'; ?>
