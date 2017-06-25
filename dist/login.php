<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("inc/metatag.php"); ?>
</head>
<body class="login">
  <?php include("inc/loading.php"); ?>
  <div class="global-container">
    <div class="bg-form"></div>
    <div class="page-container">

      <div class="page-outer">
        <form action="#" class="form login-form" data-pwa-validate>
          <div class="form-headline">
            <h1 class="type-headline">Progressive Time</h1>
          </div>
          <div class="form-group">
            <label for="pwa-email">Email</label>
            <input class="form-control" type="email" id="pwa-email" name="pwa-email" required>
          </div>
          <div class="form-group">
            <label for="pwa-password">Password</label>
            <input class="form-control" type="password" id="pwa-password" name="pwa-password" required>
          </div>
          <div class="form-group">
            <p class="error-log"></p>
          </div>
          <button class="form-button" type="submit">Login</button>
          <p class="type-body-s">Don't have an account ? <a href="sign-up.php">Sign Up</a></p>
        </form>
      </div>

    </div>
  </div>
  <script src="assets/scripts.js"></script>
</body>
</html>
