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
        <h1 class="type-headline">Interland</h1>
      </div>
      <!-- END PAGE TITLE -->

      <!-- BEGIN PAGE CONTENT -->
      <div class="page-content">
        <div class="page-content-outer">
        <div class="project-cover">
          <span style="background-image: url(assets/images/mock.png)"></span>
        </div>

        <div class="project-container">
          <a href="#" class="form-button" data-modal-trigger="#create-task-modal">Create task</a>
          <div class="project-item">
            <div class="project-title">
              <h2 class="project-name">Interland</h2>
              <h3 class="project-owner">Owner</h3>
            </div>

            <div class="detail-container">
              <div class="time-container">
                <label>Time Used</label>
                <h5 class="time"><span>13:40</span> Hours</h5>
              </div>
            </div>
          </div>

          <div class="project-item">
            <div class="project-title">
              <h2 class="project-name">Interland</h2>
              <h3 class="project-owner">Owner</h3>
            </div>
            <div class="detail-container">

              <div class="time-container">
                <label>Time Used</label>
                <h5 class="time"><span>2:40</span> Hours</h5>
              </div>
            </div>
          </div>

        </div>
        </div>

      </div>
      <!-- END PAGE CONTENT -->

      <?php include("inc/nav.php"); ?>

      <?php include("inc/modal/create-task.php"); ?>
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
