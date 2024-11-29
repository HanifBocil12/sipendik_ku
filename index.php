<?php 
    include 'asset/php/template.php';
    include 'config/koneksi.php';
    include 'layout/headher.php';
    include 'partials/navbar.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <?php include 'partials/sidebar.php';
            ?>
        </div>
        <div class="col-10">
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
                        include 'pages/add-student.php';
                        break;
                    case 'detail-student':
                        include 'pages/detail-student.php';
                        break;
                    case 'edit-student':
                        include 'pages/edit-student.php';
                        break;
                    case 'teachers':
                        break;
                    case 'settings':
                        include 'pages/settings.php';
                        break;
                    default :
                        echo '<h6> 404 Not Found </h6>';
                }
            ?>
        </div>
    </div>
</div><?php include 'layout/foother.php'; ?>