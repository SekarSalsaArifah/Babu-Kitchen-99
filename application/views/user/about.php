<!DOCTYPE html>
<html>

<head>
   <!-- Icon -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>" type="">
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title> Waroeng Babu Kitchen 99 </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet" />

  <!-- Custom styles -->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url('assets/css/responsive.css');?>" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="<?php echo base_url('assets/user/images/nav-bg.png');?>" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="<?php echo site_url('user/dashboard');?>">
            <span>
            Babu Kitchen
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('user/dashboard');?>">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('user/produk');?>">Menu</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('user/about');?>">About <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('user/cart');?>">Cart</a>
              </li>
            </ul>
            <div class="user_option">                        
              <a href="<?php echo site_url('login/logout_user');?>" class="order_online">
                Log Out
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="<?php echo base_url('assets/user/images/aboutt.png');?>" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
              Waroeng Babu Kitchen 99
              </h2>
            </div>
            <p>
              Our products are made with care, cooked “a la minute”, without any additives nor MSG and all our vegetables are cleaned with mineral water. Our recipies are home-made in respect of culinary traditions, to ensure you the real taste like in ” the good old times” that’s why we don’t use any microwave oven as well.
            </p>
            <a class="nav-link" href="<?php echo site_url('user/dashboard');?>">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->