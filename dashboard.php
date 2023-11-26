
<?php
    $pageName = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/") + 1);    

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  
  <?php include_once("head.php"); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
       

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="#" class="d-block">Aulia Nuraini</a>
                    </div>
                </div>

                  <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                                <span class="right badge badge-danger">New</span>
                            </p>
                            </a>
                        </li>

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?page=user" class="nav-link
                                        <?= $pageName == 'user.php' ? 'active':''; ?>
                                    ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Master User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=barang" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Master Barang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=stock" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Master Stock</p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </nav>
            </div>          
        </aside>  
        
    
        <div class="content-wrapper">
            <?php include("modul.php"); ?>
        </div>
      
        
        <?php include_once("script.php"); ?> 
    </div>
</body>