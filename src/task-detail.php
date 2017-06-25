<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("inc/metatag.php"); ?>
</head>
<body class="task-page">
  <?php include("inc/loading.php"); ?>
  <div class="global-container">

    <div class="page-container">
      <!-- BEGIN PAGE TITLE -->
      <div class="page-header">
        <h1 class="type-headline">Design UI</h1>
      </div>
      <!-- END PAGE TITLE -->

      <!-- BEGIN PAGE CONTENT -->
      <div class="page-content">
        <div class="page-content-outer">
          <div class="select-wrapper">
            <select name="" id="">
              <option value="">All</option>
              <option value="">Completed</option>
              <option value="">In Progress</option>
            </select>
          </div>

          <div class="project-container">
            <div class="form">
              <div class="form-group">
                <label for="">TASK NAME</label>
                <div class="form-result">
                  <span>Design UI</span>
                </div>
              </div>
              <div class="form-group">
                <label for="">TASK DETAIL</label>
                <div class="form-result">
                  <span>Login, Sign up, Forgot Password, Logo, Button Color Schema, Typo</span>
                </div>
              </div>
              <div class="form-group">
                <label for="">TIME USED</label>
                <div class="form-result">
                  <span>13:40 Hours</span>
                  <span class="time">00:30:45</span>
                </div>
              </div>
              <div class="button-container">
                <button class="btn-lg" data-toggle-button><span>Start</span></button>
              </div>
            </div>

          </div>



        </div>
      </div>
      <!-- END PAGE CONTENT -->

      <?php include("inc/nav.php"); ?>

    </div>
  </div>

  <script src="assets/scripts.js"></script>
  <script>
  jQuery(document).ready(function(){
    jQuery('.nav-item').eq(1).addClass('is-active');
  });
  </script>
</body>
</html>
