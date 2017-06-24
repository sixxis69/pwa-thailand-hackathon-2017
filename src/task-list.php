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
        <h1 class="type-headline">My Task</h1>
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

          <a class="project-item active" href="task-detail.php">
            <div class="project-title">
              <h2 class="project-name">Design UI</h2>
              <h3 class="project-owner">Owner</h3>
            </div>

            <div class="detail-container">
              <div class="time-container">
                <label>Time Used</label>
                <h5 class="time"><span>13:40</span> Hours</h5>
              </div>
            </div>
          </a>

          <a class="project-item" href="task-detail.php">
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
          </a>

        </div>
</div>
      </div>
      <!-- END PAGE CONTENT -->

      <?php include("inc/nav.php"); ?>

    </div>
  </div>

  <script src="assets/scripts.js"></script>
</body>
</html>
