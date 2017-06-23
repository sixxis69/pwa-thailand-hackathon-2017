<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("inc/metatag.php"); ?>
</head>
<body>
  <?php include("inc/loading.php"); ?>
  <div class="global-container">

    <div class="page-container">
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
        <h1>Create Project</h1>
      </div>
      <!-- END PAGE TITLE -->

      <!-- BEGIN PAGE CONTENT -->
      <div class="page-content">
        <form action="">
          <div>
            <label for="pwa-project-name">PROJECT NAME</label>
            <input type="text" id="pwa-project-name" name="pwa-project-name">
          </div>
          <div>
            <input type="file">
          </div>
          <button type="reset">Cancel</button>
          <button type="submit">Submit Project</button>
        </form>

      </div>
      <!-- END PAGE CONTENT -->

    </div>
  </div>

  <script src="assets/scripts.js"></script>
  <script>
    jQuery(document).ready(function(){
      jQuery('.nav-item').eq(0).addClass('is-active');
    });
  </script>
</body>
</html>
