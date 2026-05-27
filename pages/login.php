<?php
$page_title  = 'Sign In';
$active_page = 'home';
require_once '../header.php';
?>

<section class="hero signup-hero">
  <div class="signup-wrapper">

    <div class="signup-header">
      <span class="hero-eyebrow">Welcome Back</span>
      <h1>Sign In</h1>
      <p>Enter your credentials to access your account.</p>
    </div>

    <div class="signup-card">
      <form action="../includes/login.inc.php" method="post" novalidate class="signup-form">

        <div class="form-group">
          <label for="uid">Username</label>
          <input type="text" name="uid" id="uid" placeholder="tharushaabhayawardhanastudio" required>
        </div>

        <div class="signup-divider"></div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter your password" required>
        </div>

        <button type="submit" name="login" class="btn btn-primary btn-full">
          Sign In →
        </button>

      </form>

      <p class="signup-login-link">
        Don't have an account?
        <a href="signup.php">Create one</a>
      </p>
    </div>

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