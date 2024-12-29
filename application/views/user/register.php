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
    <b>Registration Page</b>
    <!-- <p>
    <img src="assets/logo.png" />
    </p> -->
    <h6 class="login-box-msg" style="margin-bottom:-8px;">Waroeng Babu Kitchen 99</h6>
  </div>
    <div class="card-body login-card-body">
    <?= $this->session->flashdata('message'); ?>
    <form method="POST" action="<?php echo site_url('user/save');?>">
                    <div class="row">
                      <div class="form-group col-12">
                        <label for="nama">Nama Lengkap</label>
                      <input id="nama" type="text" class="form-control" name="nama" tabindex="1" required autofocus>
                      </div>
                      <div class="form-group col-12">
                        <label for="email">Email</label>
                      <input id="email" type="text" class="form-control" name="email" tabindex="1" required autofocus>
                      </div>
                     <div class="form-group col-12">
                        <label for="alamat">Alamat</label>
                      <input id="alamat" type="text" class="form-control" name="alamat" tabindex="1" required autofocus>
                      </div>
                    <div class="form-group col-12">
                      <label for="no_tlp">No Telepon</label>
                      <input id="no_tlp" type="text" class="form-control" name="no_tlp" tabindex="1" required autofocus>
                    </div>
                      <div class="form-group col-6">
                        <div class="d-block">
                        <label for="username" class="control-label">Username</label>
                      </div>
                      <input id="username" type="text" class="form-control" name="username" tabindex="2" required>
                      </div>
                      <div class="form-group col-6">
                        <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                      </div>
                      <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                      </div>
                      <div class="form-group">
                      <div class="col-12 pt-2">
          <button type="submit" class="btn btn-primary btn-block">Register</button>

                    </div>
                    </div>
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
