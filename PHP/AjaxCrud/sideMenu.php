<?php 
include("db_connect.php");
session_start();

?>


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info text-light">
                        <?php 
                       // Current user login Data show 
                        // $id = $_SESSION['id'];
                        // $sql = "SELECT * FROM `registration` WHERE id = '$id'";
                        // $result = mysqli_query($conn, $sql);
                        // if (mysqli_num_rows($result) > 0) {
                        //     $row = mysqli_fetch_assoc($result);
                            
                        // } 
                    
                        // echo $_SESSION["userName"];
                        ?>
            
                        <!-- <a href="#" class="d-block">Alexander Pierce</a> -->
                        <?php 
                        // echo $row['name'];
                         ?>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <!-- <a href="dashboard.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a> -->
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="insert.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Insert Page</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="listdata.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ListData Page</p>
                                    </a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a href="listdata.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ListData Page</p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="showData.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>FetchData</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- <button class="bg-dark text-light"><a href="logout.php">Logout</a> </button> -->
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Simple Link
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li> -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            
            