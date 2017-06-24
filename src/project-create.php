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
      <div class="page-header">
        <h1 class="type-headline">Create Project</h1>
      </div>
      <!-- END PAGE TITLE -->

      <!-- BEGIN PAGE CONTENT -->
      <div class="page-content">
        <div class="page-content-outer">
        <form action="project-detail.php" class="form">
          <div class="form-group">
            <label for="pwa-project-name">PROJECT NAME</label>
            <input class="form-control" type="text" id="pwa-project-name" name="pwa-project-name">
          </div>
          <div class="form-group">
            <input type="file">
          </div>
          <button class="form-button" type="reset">Cancel</button>
          <button class="form-button" type="submit">Submit Project</button>
        </form>
        </div>
      </div>
      <!-- END PAGE CONTENT -->
      <?php include("inc/nav.php"); ?>
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
