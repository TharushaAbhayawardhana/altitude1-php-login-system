<?php
$page_title  = 'Sign Up';
$active_page = 'home';
require_once '../header.php';
?>

<section class="hero signup-hero">
  <div class="signup-wrapper">

    <div class="signup-header">
      <span class="hero-eyebrow">Join Our Community</span>
      <h1>Create Your Account</h1>
      <p>Be the first to know about our latest projects, insights, and special offers.</p>
    </div>

    <div class="signup-card">
      <form action="../includes/signup.inc.php" method="post" novalidate class="signup-form">

        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" name="name" id="name" placeholder="Tharusha Abhayawardhana" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email" id="email" placeholder="tharusha@example.com" required>
        </div>

        <div class="form-group">
          <label for="uid">Username</label>
          <input type="text" name="uid" id="uid" placeholder="tharushaabhayawardhanastudio" required>
        </div>

        <div class="signup-divider"></div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Choose a strong password" required>
        </div>

        <div class="form-group">
          <label for="pwdrepeat">Confirm Password</label>
          <input type="password" name="pwdrepeat" id="pwdrepeat" placeholder="Repeat your password" required>
        </div>

        <button type="submit" name="signup" class="btn btn-primary btn-full">
          Create Account →
        </button>

      </form>

      <p class="signup-login-link">
        Already have an account?
        <a href="login.php">Sign in</a>
      </p>
    </div>

  </div>
</section>

<?php
  if(isset($_GET['error'])) {
    if($_GET['error'] == 'emptyinput') {
      echo '<p style="color:#e07070; text-align:center; margin-top:1rem;">⚠ Please fill in all fields.</p>';
    }
    else if($_GET['error'] == 'invaliduid') {
      echo '<p style="color:#e07070; text-align:center; margin-top:1rem;">⚠ Choose a valid username.</p>';
    }
    else if($_GET['error'] == 'invalidemail') {
      echo '<p style="color:#e07070; text-align:center; margin-top:1rem;">⚠ Please enter a valid email address.</p>';
    }
    else if($_GET['error'] == 'passwordsdontmatch') {
      echo '<p style="color:#e07070; text-align:center; margin-top:1rem;">⚠ Passwords do not match.</p>';
    }
    else if($_GET['error'] == 'stmtfailed') {
      echo '<p style="color:#e07070; text-align:center; margin-top:1rem;">⚠ Something went wrong, please try again.</p>';
    }
    else if($_GET['error'] == 'usernametaken') {
      echo '<p style="color:#e07070; text-align:center; margin-top:1rem;">⚠ Username already taken.</p>';
    }
    else if($_GET['error'] == 'none') {
      echo '<p style="color:var(--color-accent); text-align:center; margin-top:1rem;">✓ Account created successfully!</p>';
    }
  }
?>


<hr class="divider">


<?php require_once '../footer.php'; ?>