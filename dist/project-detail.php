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
        <h1>INTERLAND</h1>
        <div class="page-action">
          <a href="#" class="btn-create" data-modal-trigger="#create-task-modal"><span></span></a>
        </div>
      </div>
      <!-- END PAGE TITLE -->

      <!-- BEGIN PAGE CONTENT -->
      <div class="page-content">
        <div class="project-cover" style="background-color: gray; height: 400px;">

        </div>

        <div class="project-container">

          <div class="project-item">
            <h2 class="project-name">INTERLAND</h2>
            <div class="detail-container">
              <h3 class="project-owner">Owner</h3>
              <div class="time-container">
                <h5 class="time"><span>13.40</span> HOURS</h5>
              </div>
            </div>
          </div>

          <div class="project-item">
            <h2 class="project-name">INTERLAND</h2>
            <div class="detail-container">
              <h3 class="project-owner">Owner</h3>
              <div class="time-container">
                <h5 class="time"><span>2.40</span> HOURS</h5>
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
