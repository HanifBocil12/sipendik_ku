<nav class="navbar bg-body-light mb-2 py-3">
    <div class="container">
        <span class="navbar-brand mb-0"><?php 
            $page = isset($_GET["page"]) ? $_GET['page'] : 'dashboard';
            switch ($page) {
                case 'dashboard' : 
                    echo 'Dashboard';
                break;
                case 'students':
                    echo 'Students';
                    break;
                case 'teachers':
                    echo "Coming Soon";
                    break;
                case 'settings':
                    echo 'Settings';
                    break;
            }
        ?></span>
    </div>
</nav>