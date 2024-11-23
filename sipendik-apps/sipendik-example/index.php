<?php
include 'config/config.php';
include 'layouts/header.php';
include 'partials/navbar.php';
?>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <?php include 'partials/sidebar.php'; ?>
    </div>
    <div class="col-md-9">
      <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
      switch ($page) {
        case 'dashboard':
          include 'pages/dashboard.php';
          break;
        case 'students':
          include 'pages/students.php';
          break;
        case 'add-student':
          include 'pages/add-student.php';
          break;
        case 'detail-student':
          include 'pages/detail-student.php';
          break;
        case 'edit-student':
          include 'pages/edit-student.php';
          break;
        case 'classes':
          include 'pages/classes.php';
          break;
        case 'teachers':
          echo "<h6>Teachers (soon)</h6>";
          break;
        case 'settings':
          include 'pages/settings.php';
          break;
        default:
          echo "<h6>404 Page Not Found</h6>";
          break;
      }
      ?>

    </div>
  </div>
</div>
<?php include 'layouts/footer.php'; ?>