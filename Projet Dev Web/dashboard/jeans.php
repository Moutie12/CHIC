<?php
include_once('../connect.php');
$sql = "select * from jeans";
$usr = mysqli_query($connect,$sql);
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
                <a class="nav-link" href="accessoire.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Liste des Accessoires</span></a>
            </li>
    
    
        </ul>
    
        <!-- Main Content -->
        <div id="content" style="width:100%;">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">La liste des pantalons</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>image</th>
                                            <th>prix</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while($row = mysqli_fetch_assoc($usr))
                                    {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><img src="../jeans/<?php echo $row['image'] ?>" style="width:80px;height:60px;margin-left:20px;"></td>
                                            <td><?php echo $row['prix'] ?></td>
                                            <td><button type="button" class="btn btn-success" ><a href="http://localhost/Projet%20Dev%20Web/dashboard/modifier_jeans.php?id=<?php echo $row['id'] ?>" id="pp23656">Modifier</a></button></td>
                                            <td><button type="button" class="btn btn-danger" ><a href="http://localhost/Projet%20Dev%20Web/dashboard/supprimer_jeans.php?id=<?php echo $row['id'] ?>" id="pp23656">Supprimer</a></button></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>

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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>