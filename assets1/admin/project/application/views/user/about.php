          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Carousel</h4> -->

              <div class="row">
                <section class="about_section layout_padding">
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container  ">

      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url('assets/img/nct.jpeg'); ?>" alt="" />
                        </div>
                      </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          <div class="detail-box" align="center" style="font-family:Century Gothic ;">
            <p>
              DREAM Shop, is the official album store. We carry album of sensational K-pop groups: NCT DREAM.
              Majority of our sales support Artists so they can provide all of their fans with more music to enjoy! *All album sales from DREAM Shop officially count toward Billboard Charts (US orders ONLY) and Gaon Charts (Both International + US orders)
              We are proud to have partnered with Korean Wave #1 leader SM Entertainment to provide you with K-Pop apparel and accessories to spread Korean culture and artists globally. Our mission is to make it easier for SM Entertainment fans all around the world to purchase authentic beloved artists goods!
                          </p>
          </div>
      </div>
    </div>
  </section>

            <div class="container">
              <div class="row grid mb-5">
                <?php foreach($produk as $p){ ?>
                <div class="col-md-2 col-lg-3 mb-2">
                  <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url()?>uploads/<?= $p->foto?>" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title" style="text-align:center;"><?= $p->namaProduk; ?></h5>
                      <p class="card-text">
                        <?= $p->deskripsi; ?>
                      </p> 
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
            <!-- / Content -->
            <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact" align="center">
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
              <br>
              <a href="https://wa.me/085674567893">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call 085674567893
                </span>
              </a>
              <br>
              <a href="https://www.google.com/gmail/">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  dream@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 footer-col" align="center">
          <h4>
            Pre-Order Information
          </h4>
          <p>
            ATTENTION to all pre-order customers!
          </p>
          <p>
            Since we've got a lot of questions on pre-order process and shipment, we've made some chart of how we process and ship out our pre-order items.
          </p>
        </div>

        <div class="col-md-4 footer-col">
          <div class="footer_detail" align="center">
            <h4>
              Dream
            </h4>
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
        
      </div>
      <div class="footer-info" align="center">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By Dream<br><br>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->
          </div>

          
          