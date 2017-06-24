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
        <form action="#" class="form">
          <div class="form-headline">
            <h1 class="type-headline">Sign up</h1>
          </div>
          <div class="form-group">
            <label for="pwa-email">EMAIL</label>
            <input class="form-control" type="email" id="pwa-email" name="pwa-email">
          </div>
          <div class="form-group">
            <label for="pwa-password">PASSWORD</label>
            <input class="form-control" type="password" id="pwa-password" name="pwa-password">
          </div>
          <div class="form-group">
            <label for="pwa-firstname">FIRSTNAME</label>
            <input class="form-control" type="text" id="pwa-firstname" name="pwa-firstname">
          </div>
          <div class="form-group">
            <label for="pwa-lastname">LASTNAME</label>
            <input class="form-control" type="text" id="pwa-lastname" name="pwa-lastname">
          </div>
          <div class="form-group">
            <label for="pwa-mobile">MOBILE NUMBER</label>
            <input class="form-control" type="text" id="pwa-mobile" name="pwa-mobile">
          </div>
          <button class="form-button" type="submit">Submit</button>
          <p class="type-body-s">Already a member ? <a href="login.php">Login</a></p>
        </form>
      </div>

    </div>
  </div>

  <script src="assets/scripts.js"></script>
</body>
</html>
