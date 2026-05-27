<?php
$page_title  = 'Home';
$active_page = 'home';
require_once 'header.php';
?>

<!-- ===================== HERO ===================== -->
<section class="hero">
  <div class="hero-inner">
    <span class="hero-eyebrow">Welcome to RND Studio</span>
    <h1>We Build Things<br>That <em>Matter</em></h1>
    <p class="hero-desc">
      Digital products and brand experiences designed with craft, clarity, and a relentless eye for detail.
    </p>
    <div class="hero-actions">
      <a href="/pages/services.php" class="btn btn-primary">Explore Services</a>
      <a href="/pages/about.php"    class="btn btn-secondary">Our Story →</a>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ===================== FEATURES ===================== -->
<section class="section">
  <div class="section-inner">
    <p class="section-label">What We Do</p>
    <h2 class="section-title">Built for the Modern Web</h2>
    <p class="section-desc">From pixel-perfect interfaces to rock-solid back-end systems — we handle the full stack.</p>

    <div class="cards-grid">

      <div class="card">
        <div class="card-icon">✦</div>
        <h3>Design Systems</h3>
        <p>Cohesive, scalable design languages that keep your product feeling unified across every touchpoint.</p>
      </div>

      <div class="card">
        <div class="card-icon">⬡</div>
        <h3>Web Development</h3>
        <p>Clean, performant code. Whether PHP, React, or headless CMS — we ship fast and ship right.</p>
      </div>

      <div class="card">
        <div class="card-icon">◈</div>
        <h3>Brand Identity</h3>
        <p>Logos, type, colour, and voice — the building blocks of a brand people remember and trust.</p>
      </div>

      <div class="card">
        <div class="card-icon">◎</div>
        <h3>Strategy &amp; Consulting</h3>
        <p>Clear thinking, honest advice. We help you prioritise what matters and cut what doesn't.</p>
      </div>

      <div class="card">
        <div class="card-icon">⟐</div>
        <h3>SEO &amp; Performance</h3>
        <p>Speed, accessibility, and search visibility built in from day one — not bolted on at the end.</p>
      </div>

      <div class="card">
        <div class="card-icon">⬠</div>
        <h3>Ongoing Support</h3>
        <p>We stick around. Monthly retainers, SLA agreements, and a team that knows your product inside-out.</p>
      </div>

    </div>
  </div>
</section>

<hr class="divider">

<!-- ===================== CTA STRIP ===================== -->
<section class="section" style="text-align:center; background: radial-gradient(ellipse 70% 60% at 50% 50%, rgba(200,169,110,0.08) 0%, transparent 70%);">
  <div class="section-inner">
    <p class="section-label">Ready to start?</p>
    <h2 class="section-title" style="max-width:520px; margin:0 auto 1rem;">Let's Build Something Great Together</h2>
    <p class="section-desc" style="margin:0 auto 2.5rem;">Drop us a message and we'll get back to you within one business day.</p>
    <a href="/pages/contact.php" class="btn btn-primary" style="font-size:1rem; padding: 0.9rem 2.2rem;">Start a Project</a>
  </div>
</section>

<?php require_once 'footer.php'; ?>
