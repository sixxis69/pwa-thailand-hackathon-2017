<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("inc/metatag.php"); ?>
</head>
<body>
  <?php include("inc/loading.php"); ?>
  <div class="global-container">

    <div class="page-container">
      <h1 class="logo">LOGO</h1>

      <form action="#">
        <div>
          <label for="pwa-email">EMAIL</label>
          <input type="email" id="pwa-email" name="pwa-email">
        </div>
        <div>
          <label for="pwa-password">PASSWORD</label>
          <input type="password" id="pwa-password" name="pwa-password">
        </div>
        <button type="submit">Log In</button>
        <p class="note">Don't have an account ? <a href="sign-up.php">Sign Up</a></p>
      </form>
    </div>
  </div>

  <script src="assets/scripts.js"></script>
</body>
</html>
