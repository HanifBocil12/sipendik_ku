<?php 
    include 'layout/headher.php';
    include 'partials/navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-3">
            <?php include 'partials/sidebar.php';
            ?>
        </div>
        <div class="col-9">
            <?php 
                $page = isset($_GET["page"]) ? $_GET['page'] : 'dashboard';
                switch($page){
                    case 'dashboard' : 
                        include 'pages/dashboard.php';
                    break;
                    case 'students':
                        include 'pages/students.php';
                        break;
                    case 'add-student':
                        include 'pages/add-student';
                        break;
                    case 'detail-student':
                        include 'pages/detail-student';
                        break;
                    case 'edit-student':
                        include 'pages/edit-student';
                        break;
                }
            ?>
        </div>
    </div>
</div><?php include 'layout/foother.php'; ?>