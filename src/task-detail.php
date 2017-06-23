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
        <h1>Design UI</h1>
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
          <div>
            <label for="">TASK NAME</label>
            <input type="text">
          </div>
          <div>
            <label for="">ASSIGN (OPTIONAL)</label>
            <input type="text">
          </div>
          <div>
            <label for="">TASK DETAIL</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
          </div>
        </div>

        <div class="button-container">
          <button>START</button>
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
