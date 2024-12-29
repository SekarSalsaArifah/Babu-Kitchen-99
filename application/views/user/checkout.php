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
                <a class="nav-link" href="<?php echo site_url('user/dashboard');?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('user/produk');?>">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('user/about');?>">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('user/bookng');?>">Cart <span class="sr-only"></span></a>
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

  <!-- Include jQuery library -->
	<script src="<?php echo base_url('assets/user/js/jquery-1.11.3.min.js'); ?>"></script>
	<script>
	function updateCartItem(obj, rowid){
		$.get("<?php echo base_url('cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
			if(resp == 'ok'){
				location.reload();
			}else{
				alert('Cart update failed, please try again.');
			}
		});
	}
	</script>

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<form method="POST">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Address
						        </button>
						      </h5>
						    </div>
						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						      	<?php if(!empty($error_msg)){ ?>
						          <div class="col-md-12">
						            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
						          </div>
						          <?php } ?>
						        <div class="billing-address-form">
						        	
						        		<p>
						        			<input type="text" class="form-control" name="name" 
							                  value="<?php echo !empty($custData['name'])?$custData['name']:''; ?>" 
							                  placeholder="Enter nama" required>
							                  <?php echo form_error('name','<p class="help-block error">','</p>'); ?>
						              	</p>
						        		<p>
						        			<input type="text" class="form-control" name="address" 
							                  value="<?php echo !empty($custData['address'])?$custData['address']:''; ?>" 
							                  placeholder="Enter alamat" required>
							                  <?php echo form_error('address','<p class="help-block error">','</p>'); ?>
              							</p>
						        		<p>
						        			<input type="text" class="form-control" name="phone" 
							                  value="<?php echo !empty($custData['phone'])?$custData['phone']:''; ?>" 
							                  placeholder="Enter telepon" required>
							                  <?php echo form_error('phone','<p class="help-block error">','</p>'); ?>
						        		</p>
						        		
						        	
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
								</tr>
							</thead>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
									<td><?php echo 'Rp.'.$item["subtotal"]; ?></td>
									<?php } ?>
								</tr>
								<tr>
									<td>Total</td>
									<td><?php echo 'Rp.'.$this->cart->total(); ?></td>
								</tr>
							</tbody>
						</table>
						<button type="submit" class="site-btn" name="placeOrder" value="Place order">Place order</button>
					</div>
				</div>
				<?php } ?>
			</div>
			</form>
		</div>
	</div>
	<!-- end check out section -->

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