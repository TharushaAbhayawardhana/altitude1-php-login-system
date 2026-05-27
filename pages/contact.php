<?php
$page_title  = 'Contact';
$active_page = 'contact';

$success = false;
$errors  = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name))               $errors[] = 'Name is required.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
    if (empty($message))            $errors[] = 'Message is required.';

    if (empty($errors)) {
        $success = true;
    }
}

require_once '../header.php';
?>

<section class="page-hero">
  <div class="hero-inner">
    <span class="hero-eyebrow">Get in Touch</span>
    <h1>Contact Us</h1>
    <p>We'd love to hear about your project. Reach out and we'll reply within one business day.</p>
  </div>
</section>

<hr class="divider">

<section class="section">
  <div class="section-inner">
    <div class="contact-grid">

      <!-- Contact info -->
      <div class="contact-info">
        <h2>Let's Start a Conversation</h2>
        <p>Whether you have a fully-formed brief or just a rough idea — we're happy to talk it through.</p>

        <div class="contact-detail">
          <span class="contact-detail-icon">✉</span>
          <div><strong>Email</strong><span>hello@RNDstudio.com</span></div>
        </div>
        <div class="contact-detail">
          <span class="contact-detail-icon">☎</span>
          <div><strong>Phone</strong><span>+9471 626 3588</span></div>
        </div>
        <div class="contact-detail">
          <span class="contact-detail-icon">⌖</span>
          <div><strong>Location</strong><span>Remote-first, worldwide</span></div>
        </div>
      </div>

      <!-- Contact form -->
      <div>
        <?php if ($success): ?>
          <div style="background:rgba(200,169,110,0.1); border:1px solid rgba(200,169,110,0.4); border-radius:var(--radius); padding:1.5rem; margin-bottom:1.5rem; color:var(--color-accent);">
            ✓ Message sent! We'll be in touch shortly.
          </div>
        <?php endif; ?>

        <?php if (!empty($errors)): ?>
          <div style="background:rgba(220,80,80,0.1); border:1px solid rgba(220,80,80,0.4); border-radius:var(--radius); padding:1.5rem; margin-bottom:1.5rem; color:#e07070;">
            <?php foreach ($errors as $err): ?><p>⚠ <?php echo htmlspecialchars($err); ?></p><?php endforeach; ?>
          </div>
        <?php endif; ?>

        <form method="POST" action="/pages/contact.php" novalidate>

          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name *</label>
              <input type="text" id="name" name="name" placeholder="Tharusha Abhayawardhana"
                     value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
            </div>
            <div class="form-group">
              <label for="email">Email Address *</label>
              <input type="email" id="email" name="email" placeholder="tharusha@example.com"
                     value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
            </div>
          </div>

          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="New project enquiry"
                   value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>">
          </div>

          <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" name="message" placeholder="Tell us about your project…" required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center; padding:0.85rem;">
            Send Message →
          </button>

        </form>
      </div>

    </div>
  </div>
</section>

<?php require_once '../footer.php'; ?>
