<?php
$page_title  = 'Services';
$active_page = 'services';
require_once '../header.php';

$services = [
  ['num'=>'01', 'title'=>'Web Design',       'desc'=>'Pixel-perfect, user-centered design backed by real research and tested prototypes.'],
  ['num'=>'02', 'title'=>'Development',      'desc'=>'Clean, maintainable code across PHP, JavaScript, and modern frameworks.'],
  ['num'=>'03', 'title'=>'Brand Identity',   'desc'=>'Logo, typography, colour system, and brand voice — built to last.'],
  ['num'=>'04', 'title'=>'SEO & Analytics',  'desc'=>'Technical SEO audits, on-page optimisation, and data dashboards that make sense.'],
  ['num'=>'05', 'title'=>'Consulting',       'desc'=>'Structured workshops and strategy sprints to align your team and sharpen direction.'],
  ['num'=>'06', 'title'=>'Ongoing Support',  'desc'=>'Retainer plans that keep your product healthy and evolving after launch.'],
];
?>

<section class="page-hero">
  <div class="hero-inner">
    <span class="hero-eyebrow">What We Offer</span>
    <h1>Our Services</h1>
    <p>A focused set of offerings, delivered with full attention and genuine care.</p>
  </div>
</section>

<hr class="divider">

<section class="section">
  <div class="section-inner">
    <p class="section-label">Full Scope</p>
    <h2 class="section-title">Everything You Need</h2>
    <p class="section-desc">We keep our service list intentionally narrow so we can do each one exceptionally well.</p>

    <div class="services-list">
      <?php foreach ($services as $s): ?>
      <div class="service-item">
        <span class="service-num"><?php echo $s['num']; ?></span>
        <div>
          <h3><?php echo $s['title']; ?></h3>
          <p><?php echo $s['desc']; ?></p>
        </div>
        <a href="/pages/contact.php" class="btn btn-secondary">Enquire →</a>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php require_once '../footer.php'; ?>
