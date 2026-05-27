<?php
session_start();

$page_title  = $page_title  ?? 'My Website';
$active_page = $active_page ?? 'home';

$nav_links = [
    'home'     => ['href' => '/index.php',          'label' => 'Home'],
    'about'    => ['href' => '/pages/about.php',    'label' => 'About'],
    'services' => ['href' => '/pages/services.php', 'label' => 'Services'],
    'blog'     => ['href' => '/pages/blog.php',     'label' => 'Blog'],
    'contact'  => ['href' => '/pages/contact.php',  'label' => 'Contact'],
];

if (isset($_SESSION['useruid'])) {
    $nav_links['profile'] = ['href' => '/pages/profile.php', 'label' => 'Profile'];
    $nav_links['logout']  = ['href' => '/includes/logout.inc.php', 'label' => 'Logout'];
} else {
    $nav_links['signup'] = ['href' => '/pages/signup.php', 'label' => 'Sign Up'];
    $nav_links['login']  = ['href' => '/pages/login.php',  'label' => 'Login'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?> — RND Studio</title>
  <meta name="description" content="RND Studio — Crafting digital experiences with precision and intent.">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<header class="site-header">
  <div class="header-inner">

    <!-- Logo -->
    <a href="/index.php" class="site-logo">RND<span>.</span></a>

    <!-- Mobile toggle -->
    <button class="nav-toggle" aria-label="Toggle navigation" onclick="this.closest('.site-header').querySelector('.main-nav').classList.toggle('open')">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- Navigation -->
    <nav class="main-nav" aria-label="Main navigation">
      <?php foreach ($nav_links as $key => $link): ?>
        
          <a href="<?php echo $link['href']; ?>"
          <?php if ($key === $active_page) echo 'class="active" aria-current="page"'; ?>
        ><?php echo $link['label']; ?></a>
      <?php endforeach; ?>
      <a href="/pages/contact.php" class="nav-cta btn">Get in Touch</a>
    </nav>

  </div>
</header>

<main class="site-main">