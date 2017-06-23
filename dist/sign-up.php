<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("inc/metatag.php"); ?>
</head>
<body>
  <?php include("inc/loading.php"); ?>
  <div class="global-container">

    <div class="page-container">
      <div class="page-title">
        <h1>Sign up</h1>
      </div>

      <form action="#">
        <div>
          <label for="pwa-email">EMAIL</label>
          <input type="email" id="pwa-email" name="pwa-email">
        </div>
        <div>
          <label for="pwa-password">PASSWORD</label>
          <input type="password" id="pwa-password" name="pwa-password">
        </div>
        <div>
          <label for="pwa-firstname">FIRSTNAME</label>
          <input type="text" id="pwa-firstname" name="pwa-firstname">
        </div>
        <div>
          <label for="pwa-lastname">LASTNAME</label>
          <input type="text" id="pwa-lastname" name="pwa-lastname">
        </div>
        <div>
          <label for="pwa-mobile">MOBILE NUMBER</label>
          <input type="text" id="pwa-mobile" name="pwa-mobile">
        </div>
        <button type="submit">Submit</button>
        <p class="note">Already a member ? <a href="login.php">Login</a></p>
      </form>
    </div>
  </div>

  <script src="assets/scripts.js"></script>
</body>
</html>
