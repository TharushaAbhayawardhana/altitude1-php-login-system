<?php
$page_title  = 'Sign In';
$active_page = 'home';
require_once '../header.php';
?>

<section class="hero signup-hero">
  <div class="signup-wrapper">

    <div class="signup-header">
      <span class="hero-eyebrow">COMING SOON</span>
        <h1>Profile Page</h1>
  </div>
</section>


<?php
  if(isset($_GET['error'])) {
    if($_GET['error'] == 'emptyinput') {
      echo '<p style="color:#e07070; text-align:center; margin-top:1rem;">⚠ Please fill in all fields.</p>';
    }
    else if($_GET['error'] == 'wronglogin') {
      echo '<p style="color:#e07070; text-align:center; margin-top:1rem;">⚠ Incorrect Login Information.</p>';
    }
  }
?>

<hr class="divider">

<?php require_once '../footer.php'; ?>