<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('plugins/fontawesome-free/css/all.min.css');?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('dist/css/adminlte.min.css');?>">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/logo.png');?>">

  <script src="https://www.google.com/recaptcha/api.js?render=6Lc7rcUoAAAAAGXqNkILJzRqEWoR1hUoSncrTCVU"></script>
    <script>
        grecaptcha.ready(() => {
            grecaptcha.execute('6Lf5sA8pAAAAAP2erlrcaMdUW-BbRGOGsogjWEX0', { action: 'contact' }).then(token => {
              document.querySelector('#recaptchaResponse').value = token;
            });
        });
    </script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card">
  <div class="login-logo mt-3" style="margin-bottom:">
    <b>Welcome Admin</b>
    <!-- <p>
    <img src="assets/logo.png" />
    </p> -->
    <h6 class="login-box-msg" style="margin-bottom:-8px;">Waroeng Babu Kitchen 99</h6>
  </div>
    <div class="card-body login-card-body">
    <?= $this->session->flashdata('message'); ?>
      <form class="signin-form" action="<?php echo site_url('Login/aksi_login');?>" method="POST">
      
      <p class="login-box-msg" style="margin-bottom:-8px;">Masukkan username dan password</p> 
      <div class="input-group mb-3">
      <input type="username" name="username" class="form-control" placeholder="Username" required autofocus>
      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- Nampilin recaptcha-->
        <!-- <?php echo $widget;?>
        <?php echo $script;?> -->
        
        <div class="row">
          <div class="col-8">
          </div>
          <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('6Lf5sA8pAAAAAP2erlrcaMdUW-BbRGOGsogjWEX0'); ?>"></div>
          <!-- /.col -->
          <div class="col-12 pt-2">
          <button type="submit" class="btn btn-primary btn-block">Log In</button>
          <!-- /.col -->
        </div>
      </form> 
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url('plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('dist/js/adminlte.min.js');?>"></script>
</body>
</html>
