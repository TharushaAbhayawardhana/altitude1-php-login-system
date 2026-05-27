<?php
$page_title  = 'Blog';
$active_page = 'blog';
require_once '../header.php';

$posts = [
  ['date'=>'May 18, 2026', 'tag'=>'Design',      'title'=>'Why Whitespace Is Your Most Powerful Design Tool',     'excerpt'=>'Good design isn\'t about adding more — it\'s about knowing exactly what to leave out.'],
  ['date'=>'Apr 30, 2026', 'tag'=>'Development',  'title'=>'PHP in 2026: Still Relevant, More Capable Than Ever',   'excerpt'=>'A look at how modern PHP has evolved and why it remains a solid choice for web projects.'],
  ['date'=>'Apr 12, 2026', 'tag'=>'Strategy',     'title'=>'The Hidden Cost of Skipping Discovery',                'excerpt'=>'Rushing to build without clarity is the most expensive mistake a team can make.'],
  ['date'=>'Mar 28, 2026', 'tag'=>'Design',       'title'=>'Typography Is 95% of Design — Take It Seriously',      'excerpt'=>'A guide to choosing, pairing, and implementing type that elevates every interface.'],
  ['date'=>'Mar 10, 2026', 'tag'=>'Development',  'title'=>'Measuring What Matters: A Practical Guide to Web Performance', 'excerpt'=>'Core Web Vitals, LCP, CLS — what they mean and how to actually improve them.'],
  ['date'=>'Feb 22, 2026', 'tag'=>'Branding',     'title'=>'Building a Brand That Feels Alive in 2026',            'excerpt'=>'Static brand guidelines are dead. Here\'s how to build a living, adaptable identity system.'],
];
?>

<section class="page-hero">
  <div class="hero-inner">
    <span class="hero-eyebrow">Ideas &amp; Insights</span>
    <h1>The Blog</h1>
    <p>Thoughts on design, development, and building things that last.</p>
  </div>
</section>

<hr class="divider">

<section class="section">
  <div class="section-inner">
    <div class="cards-grid">
      <?php foreach ($posts as $post): ?>
      <article class="card">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
          <span style="font-size:0.75rem; letter-spacing:0.1em; text-transform:uppercase; color:var(--color-accent);"><?php echo $post['tag']; ?></span>
          <time style="font-size:0.8rem; color:var(--color-muted);"><?php echo $post['date']; ?></time>
        </div>
        <h3 style="font-size:1.1rem; margin-bottom:0.6rem;"><?php echo $post['title']; ?></h3>
        <p style="margin-bottom:1.25rem;"><?php echo $post['excerpt']; ?></p>
        <a href="#" style="font-size:0.85rem; font-weight:500; letter-spacing:0.04em;">Read more →</a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once '../footer.php'; ?>
