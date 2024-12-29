<!DOCTYPE html>
<html>

<head>
  <!-- Icon -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="<?php echo base_url('assets/user/images/favicon.png');?>" type="">
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title> Waroeng Babu Kitchen 99 </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet" />

  <!-- Custom styles  -->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url('assets/css/responsive.css');?>" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="<?php echo base_url('assets/user/images/homee.jpg');?>" alt="">
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
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('user/dashboard');?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('user/produk');?>">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('user/about');?>">About</a>
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
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Home Made Restaurant
                    </h1>
                    <p>
                      Our products are made with care, cooked “a la minute”, without any additives nor MSG and all our vegetables are cleaned with mineral water. Our recipies are home-made in respect of culinary traditions, to ensure you the real taste like in ” the good old times” that’s why we don’t use any microwave oven as well.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
        <div class="row">
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="<?php echo base_url('assets/user/images/g1.png');?>" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Recommended
                </h5>
                <h6>
                  <span>Bihun Kuah</span>
                </h6>                
              </div>
            </div>
          </div>
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="<?php echo base_url('assets/user/images/nasgor.png');?>" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Recommended
                </h5>
                <h6>
                  <span>Nasi Goreng Breast</span>
                </h6>                           
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

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
                About Us
              </h2>
            </div>
            <p>
              Our products are made with care, cooked “a la minute”, without any additives nor MSG and all our vegetables are cleaned with mineral water. Our recipies are home-made in respect of culinary traditions, to ensure you the real taste like in ” the good old times” that’s why we don’t use any microwave oven as well.
            </p>
            <a class="nav-link" href="<?php echo site_url('user/about');?>">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- client section -->

  <section class="client_section layout_padding-bottom" style="padding-top: 100px;">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          Testimoni Pelanggan
        </h2>
      </div>
      <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <div class="row pt-4 pb-4 gy-4">
        <div class="col-md-4 text-center tim" style="padding: 30px">
          <a href="https://www.instagram.com/na.jaemin0813" style="color: inherit;text-decoration: none;">
          <img src="<?php echo base_url('assets/user/images/nana.jpg');?>" width="80%" height="60%" class="rounded-circle mb-3">
            <h4>Na Jaemin</a></h4>
            <p>“The food was excellent and so was the service.  I had the mushroom pizza with fanta float which was awesome. The restaurant has a vey nice ambiance and a cozy bar.”</p>
           
        </div>

        <div class="col-md-4 text-center tim" style="padding: 30px">
          <a href="https://www.instagram.com/nct_dream" style="color: inherit;text-decoration: none;">
          <img src="<?php echo base_url('assets/user/images/haechan.jpg');?>" width="80%" height="60%" class="rounded-circle mb-3">
            <h4>Lee Haechan</a></h4>
            <p>“Great selection! My go to favorite is the Fish Filled Burger. We also love their pizza. I just had the papperoni pizza and loved it!”</p>
           
        </div>

        <div class="col-md-4 text-center tim" style="padding: 30px">
          <a href="https://www.instagram.com/nct" style="color: inherit;text-decoration: none;">
          <img src="<?php echo base_url('assets/user/images/chenle.jpg');?>" width="80%" height="60%" class="rounded-circle mb-3">
            <h4>Zhong Chenle</a></h4>
            <p>“Great pizza, chicken, calamari, drinks, I could go on. Everything we’ve tried here has been amazing. The staff is always so friendly and accommodating.”</p>   
        </div>
      </div>
    </div>
  </div>
    </div>
  </section>

  <!-- end client section -->