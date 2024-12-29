<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>DREAM SHOP - User</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/vendor/fonts/boxicons.css'); ?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/vendor/css/core.css'); ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/vendor/css/theme-default.css'); ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/demo.css'); ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css'); ?>" />

    <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/vendor/libs/apex-charts/apex-charts.css'); ?>" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo base_url('assets/admin/assets/vendor/js/helpers.js'); ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url('assets/admin/assets/js/config.js'); ?>"></script>
  </head>

  <body>
    <!-- Content -->
    <nav class="navbar navbar-example navbar-expand-lg bg-light">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#navbar-ex-3"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-ex-3">
                      <div class="navbar-nav me-auto">
                        <a class="nav-item nav-link " href="<?php echo site_url('user/dashboard'); ?>">Home</a>
                        <a class="nav-item nav-link " href="<?php echo site_url('user/album_user'); ?>">Albums</a>
                        <a class="nav-item nav-link " href="<?php echo site_url('user/detail_keranjang'); ?>">Cart</a>
                        <a class="nav-item nav-link" href="<?php echo site_url('user/about_user'); ?>">About</a>
                      </div>

                      <form onsubmit="return false">
                        <button class="btn btn-outline-primary" type="button"><a href="<?php echo site_url('user/pembayaran'); ?>">Buy Now</a></button>
                      </form>
                    </div>
                  </div>
                </nav>

                <?= $contents ?>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo base_url('assets/admin/assets/vendor/libs/jquery/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/vendor/libs/popper/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/vendor/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>

    <script src="<?php echo base_url('assets/admin/assets/vendor/js/menu.js'); ?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?php echo base_url('assets/admin/assets/vendor/libs/apex-charts/apexcharts.js'); ?>"></script>

    <!-- Main JS -->
    <script src="<?php echo base_url('assets/admin/assets/js/main.js'); ?>"></script>

    <!-- Page JS -->
    <script src="<?php echo base_url('assets/admin/assets/js/dashboards-analytics.js'); ?>"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
