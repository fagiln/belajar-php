<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.css" />


</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="dashboard.php" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="adminlte/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" />
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted">
                    <i class="far fa-clock mr-1"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="adminlte/dist/img/user8-128x128.jpg" alt="User Avatar" class="imgarkatama.dev@gmail.com-size-50 img-circle mr-3" />
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted">
                    <i class="far fa-clock mr-1"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" />
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted">
                    <i class="far fa-clock mr-1"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="dashboard.php" class="brand-link">
        <img src="adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">FagiLte</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-fl5x">
          <div class="image">
            <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block">Fagil Nuril Akbar</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
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
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-image"></i>
                <p>
                  Product
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="newproduct.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Product</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">New Product</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">New Product</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <?php
        $name = "DeLorean-Alpha";


        ?>
        <div class="container-xxl">
          <div class="row">
            <?php
            // Data mobil
            $mobil = array(
              array(
                "nama" => "DeLorean-Alpha",
                "gambar" => "https://media.architecturaldigest.com/photos/63079fc7b4858efb76814bd2/16:9/w_4000,h_2250,c_limit/9.%20DeLorean-Alpha-5%20%5BDeLorean%5D.jpg",
                "harga" => "$9999999",
                "deskripsi" => "about car."
              ),
              array(
                "nama" => "Supra",
                "gambar" => "https://www.otoinfo.id/wp-content/uploads/2024/03/Toyota-GR-Supra-Mobil-Sport-Legendaris-yang-Kembali-dengan-Lebih-Hebat.jpg",
                "harga" => "$9999999",
                "deskripsi" => "about car."
              ),
              array(
                "nama" => "Ferrari",
                "gambar" => "https://cdn.motor1.com/images/mgl/Znnm7r/s3/ferrari-sp48-unica.jpg",
                "harga" => "$9999999",
                "deskripsi" => "about car."
              ),
              array(
                "nama" => "Mustang Shelby",
                "gambar" => "https://cdn.motor1.com/images/mgl/9mZpXv/s1/2020-2022-ford-mustang-shelby-gt500kr.webp",
                "harga" => "$9999999",
                "deskripsi" => "about car."
              ),
              array(
                "nama" => "Lamborghini",
                "gambar" => "https://cdn.motor1.com/images/mgl/OozxwY/s3/2024-lamborghini-aventador-successor-rendering.jpg",
                "harga" => "$9999999",
                "deskripsi" => "about car."
              )
            );

            foreach ($mobil as $mobil_item) {
            ?>
            
              <div class="card mb-3 col-5 m-3">
                <div class="row no-gutters card-body">
                  <div class="col-md-4">
                    <img src="<?php echo $mobil_item['gambar']; ?>" style="object-fit: cover; object-position: center" class="h-100 w-100" alt="..." />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title font-weight-bold pb-3"><?php echo $mobil_item['nama']; ?></h5>
                      <p class="card-text"><?php echo $mobil_item['deskripsi']; ?></p>
                      <p class="card-text"><i class="fas fa-dollar-sign"></i> <?php echo $mobil_item['harga']; ?></p>
                      <p class="card-text"><i class="fas fa-search"></i> <?php echo $mobil_item['nama']; ?></p>
                      <div class="d-flex justify-content-end">
                        <button class="btn btn-primary">Purchase</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>

            <!-- <div class="card mb-3 col-5 m-3">
              <div class="row no-gutters card-body">
                <div class="col-md-4">
                  <img src="https://media.architecturaldigest.com/photos/63079fc7b4858efb76814bd2/16:9/w_4000,h_2250,c_limit/9.%20DeLorean-Alpha-5%20%5BDeLorean%5D.jpg" style="object-fit: cover; object-position: center" class="h-100 w-100 car" alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold pb-3">
                      <?php
                      $name;
                      ?>
                    </h5>
                    <p class="card-text">about car.</p>
                    <p class="card-text">
                      <i class="fas fa-dollar-sign"></i>

                      $9999999
                    </p>
                    <p class="card-text">
                      <i class="fas fa-search"></i>

                      DeLorean-Alpha
                    </p>

                    <div class="d-flex justify-content-end">
                      <button class="btn btn-primary">Purchase</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3 col-5 m-3">
              <div class="row no-gutters card-body">
                <div class="col-md-4">
                  <img src="https://www.otoinfo.id/wp-content/uploads/2024/03/Toyota-GR-Supra-Mobil-Sport-Legendaris-yang-Kembali-dengan-Lebih-Hebat.jpg" style="object-fit: cover; object-position: center" class="h-100 w-100" alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold pb-3">Supra</h5>
                    <p class="card-text">about car.</p>
                    <p class="card-text">
                      <i class="fas fa-dollar-sign"></i>

                      $9999999
                    </p>
                    <p class="card-text">
                      <i class="fas fa-search"></i>

                      Supra
                    </p>

                    <div class="d-flex justify-content-end">
                      <button class="btn btn-primary">Purchase</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3 col-5 m-3">
              <div class="row no-gutters card-body">
                <div class="col-md-4">
                  <img src="https://cdn.motor1.com/images/mgl/Znnm7r/s3/ferrari-sp48-unica.jpg" style="object-fit: cover; object-position: center" class="h-100 w-100" alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold pb-3">Ferrari</h5>
                    <p class="card-text">about car.</p>
                    <p class="card-text">
                      <i class="fas fa-dollar-sign"></i>

                      $9999999
                    </p>
                    <p class="card-text">
                      <i class="fas fa-search"></i>

                      Ferrari
                    </p>

                    <div class="d-flex justify-content-end">
                      <button class="btn btn-primary">Purchase</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3 col-5 m-3">
              <div class="row no-gutters card-body">
                <div class="col-md-4">
                  <img src="https://cdn.motor1.com/images/mgl/9mZpXv/s1/2020-2022-ford-mustang-shelby-gt500kr.webp" style="object-fit: cover; object-position: center" class="h-100 w-100" alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold pb-3">
                      Mustang Shelby
                    </h5>
                    <p class="card-text">about car.</p>
                    <p class="card-text">
                      <i class="fas fa-dollar-sign"></i>

                      $9999999
                    </p>
                    <p class="card-text">
                      <i class="fas fa-search"></i>

                      Mustang Shelby
                    </p>

                    <div class="d-flex justify-content-end">
                      <button class="btn btn-primary">Purchase</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3 col-5 m-3">
              <div class="row no-gutters card-body">
                <div class="col-md-4">
                  <img src="https://cdn.motor1.com/images/mgl/OozxwY/s3/2024-lamborghini-aventador-successor-rendering.jpg" style="object-fit: cover; object-position: center" class="h-100 w-100" alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold pb-3">
                      Lamborghini
                    </h5>
                    <p class="card-text">about car.</p>
                    <p class="card-text">
                      <i class="fas fa-dollar-sign"></i>

                      $9999999
                    </p>
                    <p class="card-text">
                      <i class="fas fa-search"></i>

                      Lamborghini
                    </p>

                    <div class="d-flex justify-content-end">
                      <button class="btn btn-primary">Purchase</button>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">Anything you want</div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021
        <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>