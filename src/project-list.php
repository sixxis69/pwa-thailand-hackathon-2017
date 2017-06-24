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
        <h1>Project</h1>
        <div class="page-action">
          <a href="create-project.php" class="btn-create"><span></span></a>
        </div>
      </div>
      <!-- END PAGE TITLE -->

      <!-- BEGIN PAGE CONTENT -->
      <div class="page-content">
        <select name="" id="">
          <option value="">All</option>
          <option value="">Completed</option>
          <option value="">In Progress</option>
        </select>

        <div class="project-container">

          <a class="project-item" href="project-detail.php">
            <h2 class="project-name">INTERLAND</h2>
            <h3 class="project-owner">Owner</h3>
            <div class="detail-container">
              <h4 class="percent">48%</h4>
              <div class="time-container">
                <label>TIME USED</label>
                <h5 class="time"><span>13.40</span> HOURS</h5>
              </div>
            </div>
            <div class="progress-container">
              <div class="progress-wrapper">
                <div class="progress progress-green" style="width:48%;"></div>
              </div>
            </div>
          </a>

          <a class="project-item" href="project-detail.php">
            <h2 class="project-name">INTERLAND</h2>
            <h3 class="project-owner">Owner</h3>
            <div class="detail-container">
              <h4 class="percent">13%</h4>
              <div class="time-container">
                <label>TIME USED</label>
                <h5 class="time"><span>2.40</span> HOURS</h5>
              </div>
            </div>
            <div class="progress-container">
              <div class="progress-wrapper">
                <div class="progress" style="width:13%;"></div>
              </div>
            </div>
          </a>

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
