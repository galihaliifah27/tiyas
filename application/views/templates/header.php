<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Tempusdominus Bootstrap 4-->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css');?>">
  <!-- icheck -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!--jqvmap -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/jqvmap/jqvmap.min.css');?>">
  <!-- AdminLTE Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css');?>">

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/overlayScrollBars/css/OverlayScrollBars.min.css');?>">

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');?>">

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.css');?>"> 
  
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/summernote/summernote-bs4.css');?>">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');?>">
  <!-- Summernote CSS (Make sure to use only one link) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    .center-text {
      text-align: center;
      width: 100%;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="../../index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
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
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
        <!-- Message Content (same as in original) -->
        <a href="#" class="dropdown-item">
          <div class="media">
            <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Brad Diesel
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
        </a>
        <!-- More message items -->
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
        <!-- Notification Content (same as in original) -->
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>

    <!-- Logout Link -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
        Logout
      </a>
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

  <!-- Bootstrap 4 Logout Confirmation Modal -->
 
</nav>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard') ?>" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="info center-text">
        <!-- Dynamically display the logged-in user's full name -->
        <a href="#" class="d-block"><?= $this->session->userdata('nama_lengkap') ?></a>
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
        <?php $level = $this->session->userdata('role');?>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
              </a>
            <ul class="nav nav-treeview">
              <?php if($level == 'admin' || $level == 'user'): ?>
                <li class="nav-item">
                <a href="<?= base_url('berita'); ?>" class="nav-link">
                  <i class="far fa-newspaper nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
              <?php endif; ?>
              <?php if ($level == 'admin'): ?>
                <li class="nav-item">
                <a href="<?= base_url('matakuliah'); ?>" class="nav-link">
                  <i class="far fa-folder nav-icon"></i>
                  <p>matakuliah</p>
                </a>
                </li>
                <?php endif; ?>
              <?php if ($level == 'admin'): ?>
                <li class="nav-item">
                <a href="<?= base_url('kategori'); ?>" class="nav-link">
                  <i class="far fa-folder nav-icon"></i>
                  <p>Kategori</p>
                </a>
                </li>
                <?php endif; ?>
                <?php if ($level == "admin") : ?>
                  <li class="nav-item">
                    <a href="<?=base_url('berita/laporan');?>" class="nav-link">
                    <i class="far fa-newspaper nav-icon"></i>
                    <p>Laporan</p>
                </a>
                </li>
                <?php endif; ?>
          </ul>
        </li>
      <li class="nav-item">
        <a href="<?= site_url('auth/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </a>
      </li>
              </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
              </div>