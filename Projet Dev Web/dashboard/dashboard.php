<?php
    include_once('../connect.php');
    $sql = "select * from pantalon";
    $pantalon1 = mysqli_query($connect,$sql);
    $pantalon = mysqli_num_rows($pantalon1);
    
    $sql = "select * from pull";
    $pantalon1 = mysqli_query($connect,$sql);
    $pull = mysqli_num_rows($pantalon1);

    $sql = "select * from chaussure";
    $pantalon1 = mysqli_query($connect,$sql);
    $chaussure = mysqli_num_rows($pantalon1);

    $sql = "select * from robe";
    $pantalon1 = mysqli_query($connect,$sql);
    $robe = mysqli_num_rows($pantalon1);

    $sql = "select * from accessoire";
    $pantalon1 = mysqli_query($connect,$sql);
    $sac = mysqli_num_rows($pantalon1);
    
    $sql = "select * from chemise";
    $pantalon1 = mysqli_query($connect,$sql);
    $chemise = mysqli_num_rows($pantalon1);

    $sql = "select * from manteaux";
    $pantalon1 = mysqli_query($connect,$sql);
    $manteaux = mysqli_num_rows($pantalon1);

    $sql = "select * from jeans";
    $pantalon1 = mysqli_query($connect,$sql);
    $jeans = mysqli_num_rows($pantalon1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="nav">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    
        <!-- Topbar Search -->
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <img src="https://cdn-icons-png.flaticon.com/512/3917/3917754.png" height="25px" width="25px">
                    </button>
                </div>
            </div>
        </form>
    
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
    
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
    
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" routerLink="/dashboard" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                </a>
            </li>
    
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">moutie</span>
                    <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-512.png" height="50px" width="50px">
                </a>
            </li>
            <button type="button" class="btn btn-danger" id="logout"><a style="text-decoration:none;color:white;" href="logout.php">LogOut</a></button>
    
        </ul>
    
    </nav>  
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Panel</div>
            </a>
    
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
    
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="pull.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Liste des Pulls</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="pantalon.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Liste des pantalons</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="chaussure.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Liste des Chaussures</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="jeans.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Liste des Jeans</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="manteau.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Liste des Manteaux</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="chemise.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Liste des Chemises</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="robe.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Liste des Rboes</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="sac.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Liste des Sacs</span></a>
            </li>
    
    
        </ul>
    
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
    
            <!-- Main Content -->
            <div id="content">
    
                <!-- Topbar -->
                <app-navbar-dashboard></app-navbar-dashboard>
                <!-- End of Topbar -->
    
                <!-- Begin Page Content -->
                <div class="container-fluid">
    
                    <!-- Content Row -->
                    <div class="row">
    
                        <div class="col-xl-3 col-md-6 mb-4" id="element_row">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pantalon</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pantalon ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                        <div class="col-xl-3 col-md-6 mb-4" id="element_row1">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pull</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pull?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                        <div class="col-xl-3 col-md-6 mb-4" id="element_row1">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Chaussures 
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $chaussure ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
    
                        <div class="col-xl-3 col-md-6 mb-4" id="element_row">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jeans</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jeans?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                        <div class="col-xl-3 col-md-6 mb-4" id="element_row1">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Manteaux</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $manteaux?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                        <div class="col-xl-3 col-md-6 mb-4" id="element_row1">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Chemises 
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $chemise?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
    
                        <div class="col-xl-3 col-md-6 mb-4" id="element_row">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Robes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $robe?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                        <div class="col-xl-3 col-md-6 mb-4" id="element_row1">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Sacs</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $sac ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    
                        </div>
    
                    </div>
    
                </div>
                <!-- /.container-fluid -->
    
            </div>
        
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>