<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/admin/css/adminlte.css');?>">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/logo.png');?>">
    <!-- CSS Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <!-- AJAX
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"> -->

    <!-- <script src="<?php echo base_url('assets/admin/js/bootstrap.js'); ?>"></script> -->
    <script src="<?php echo base_url('assets/admin/js/jquery-3.3.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/jquery-ui.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">

<body class="hold-transition sidebar-mini">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <?php
      $namainstansi = $this->session->userdata('namainstansi');
    ?>
    <ul class="navbar-nav ml-auto mr-3">
    <div class="d-flex" style="align-items: center;">
      <?php
      if (!empty($namainstansi)) {
          echo "<h4> $namainstansi</h4>";
      } else {
          echo "";
      }
      ?>
    </div>
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
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url("dashadmin/dashboard")?>" class="brand-link">
      <span class="brand-text font-weight-light">Dashboard Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-3">
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?=base_url('adminpanel/dashboard')?>" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
             Dashboard
              </p>
            </a>
          </li>
            
            <!-- <ul class="nav nav-treeview"> -->
              <li class="nav-item">
                <a href="<?=base_url('member')?>" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('menu')?>" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('order')?>" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('detailorder')?>" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Detail Order</p>
                </a>
              </li>
            <!-- </ul> -->
          </li>
          <div class="brand-link p-1 mb-2"></div>
          <li class="logout nav-item">
            <a href="<?=base_url('login/logout')?>" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i> 
              <p>Logout</p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <!-- Page Content  -->
    <div id="content" class="">
      <?=$contents?>
    </div>
</div>
    </tbody>
</table>

<!-- jQuery -->
<script src="<?=base_url('assets/admin/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap -->
<script src="<?=base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE -->
<script src="<?=base_url('dist/js/adminlte.js');?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?=base_url('assets/admin/plugins/chart.js/Chart.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('dist/js/pages/dashboard3.js');?>"></script>
<script src="<?=base_url('assets/admin/js/jquery.min.js');?>"></script>
    <script src="<?=base_url('assets/admin/js/popper.js');?>"></script>
    <script src="<?=base_url('assets/admin/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('assets/admin/js/main.js');?>"></script>
    <!-- JS Data Table -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script>new DataTable('#datatable');</script>
    <!-- /JS Data Table -->

    <!--alert-->
    <script src="<?= base_url('assets/admin/js/sweetalert2.all.min.js');?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".alert").hide().fadeIn(0, function () {
                window.setTimeout(function () {
                    $(".alert").animate({
                        opacity: 1,
                        top: 0,
                    }, 1000, function () {
                    });
                },0);
                window.setTimeout(function () {
                    $(".alert").animate({
                        opacity: 0,
                        top: -80,
                    }, 1700, function () {
                        $(this).remove();
                    });
                }, 5000);
            });
        });
  </script>
  <script type = 'text/javascript'>
              $(document).ready(function () {
                $('#server').autocomplete({
                  source : "<?php echo site_url('dashadmin/get_autocomplete') ?>"
                  select :function name(event, ui){
                    ('[name="nama_server"]').val(ui.item.label);
                    ('[name="ip"]').val(ui.item.ip);
                    ('[name="os"]').val(ui.item.os);
                    ('[name="versi"]').val(ui.item.versi_os);
                  }
                })
              })
            </script>
</body>
</html>
