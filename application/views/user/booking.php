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

  <title> Dream - Fast Food Restaurant </title>

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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/edit.css');?>">
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
                <a class="nav-link" href="<?php echo site_url('user');?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('user/produk');?>">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('user/about');?>">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('user/bookng');?>">Book Table <span class="sr-only">(current)</span></a>
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

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="title">
        <h2>
          Book A Table
        </h2>
      </div>
      <div class="row">
        
          <div class="form_container">
            <form action="<?php echo site_url('user/aksisimpan_bookuser'); ?>" method="POST" enctype="multipart/form-data">
            <!-- <label class="col-sm-3 col-form-label" for="basic-default-name" >Nama Menu</label>
                        <div class="col-sm-12"> -->
              <div class="col">
                 <input type="text" class="form-control" name="nama" placeholder="Name" />
              </div>
              <div class="col">
                <input type="text" class="form-control" name="nohp" placeholder="Phone Number" />
              </div>
              <div class="col">
                <input type="text" class="form-control" name="email" placeholder="E-mail" />
              </div>
              <div class="col">
                <input type="number" class="form-control" name="person" placeholder="Person" />
              </div> 
              <div class="col">
                <input type="number" class="form-control" name="amount" placeholder="Table Amount" />
              </div>                                                         
              <div class="col">
                <select class="form-control" name="id_menu" placeholder="ID Menu">
                <option>Choose Menu</option>
                  <?php foreach($menu as $item) { ?>
                    <option value="<?php echo $item->id_menu;?>"><?php echo $item->id_menu;?> <?php echo $item->nama_menu;?></option>
                  <?php } ?>
                </select>            
              </div>
              <div class="col">
                <input type="date" class="form-control" name="date" placeholder="Date" />
              </div>
              <div class="btn_box">
                <button>
                  Book Now
                </button>
              </div>
            </form>
          </div>
        
      </div>
    </div>
  </section>
  
  <!-- end about section -->

<!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="https://www.google.com/maps/?hl=id">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="https://wa.me/085674567893">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call 085674567893
                </span>
              </a>
              <a href="https://www.google.com/gmail/">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  dream@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Dream
            </a>
            <p>
              Follow us on the link bellow to get more information
            </p>
            <div class="footer_social">
              <a href="https://facebook.com">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://twitter.com">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://linkedin.com">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="https://instagram.com">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="https://pinterest.com">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 AM -10.00 PM
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By Dream<br><br>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->
  <!-- jQery -->
  <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js');?>"></script>
  <!-- popper js -->
  <script src="<?php echo base_url('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');?>" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
  <!-- owl slider -->
  <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');?>">
  </script>
  <!-- isotope js -->
  <script src="<?php echo base_url('https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js');?>"></script>
  <!-- nice select -->
  <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js');?>"></script>
  <!-- custom js -->
  <script src="<?php echo base_url('assets/js/custom.js');?>"></script>


</body>

</html>