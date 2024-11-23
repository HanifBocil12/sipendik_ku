<?php 
    include 'layout/headher.php';
    include 'partials/navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?= include 'partials/sidebar.php' ?>
        </div>
        <div class="col-md-9">
            <?php 
            $page = isset($_GET['page']) ?: 'dashboard';
            switch ($page) {
                case 'dashboard':
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }
            ?>
        </div>
    </div>
</div>