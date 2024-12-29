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
                <a class="nav-link" href="<?php echo site_url('user/bookng');?>">Cart <span class="sr-only">(current)</span></a>
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

  <!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

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

  	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
              <div class="col-10 col-md-10 col-lg-10">
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table id='datatable' class="table table-striped">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Sub Total</th>
								</tr>
							</thead>
							<tbody>
								<?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
								<tr class="table-body-row">
									<td class="product-remove"><button type="button" class="close" aria-label="Close" onclick="return confirm
                                    ('Are you sure to delete item?')?window.location.href='<?php echo base_url('cart/removeItem/'.$item["rowid"]); ?>'
                                    :false;">
                                    <span aria-hidden="true">&times;</span>
                                    </button></td>
									<td class="product-image"><?php $imageURL = !empty($item["image"])?base_url('uploads/'.$item["image"]):base_url('uploads/'); ?>
                                    <img src="<?php echo $imageURL; ?>" alt="" style="height: 100px; width: 100px;"></td>
									<td class="product-name"><?php echo $item["name"]; ?></td>
									<td class="product-price"><?php echo 'Rp.'.$item["price"]; ?></td>
									<td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" 
                                    onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
									<td><?php echo 'Rp.'.$item["subtotal"]; ?></td>
								</tr>
							</tbody>
							<?php } }else{ ?>
                                      <tr>
                                        <td colspan="6">
                                          <p>Your cart is empty.....</p>
                                        </td>
                                      </tr>
                                    <?php } ?>
						</table>
					</div>
				</div>

				<div class="row">
              <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table id='datatable' class="table table-striped">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<?php if($this->cart->total_items() > 0){ ?>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td><?php echo 'Rp.'.$this->cart->total(); ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="<?php echo site_url('user/checkout');?>" class="boxed-btn black">Check Out</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->
  
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