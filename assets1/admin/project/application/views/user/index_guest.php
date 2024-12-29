          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Carousel</h4> -->

              <div class="row">
                <!-- Bootstrap carousel -->
                <div class="col-md">
                  <h5 class="my-4" style="text-align: center;">WELCOME TO DREAM SHOP</h5>

                  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url('assets/img/beatbox.jpg'); ?>" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>BEATBOX</h3>
                          <p>NCT DREAM The 2nd Album Repackage</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url('assets/img/glitchmode.jpeg'); ?>" alt="Second slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>GLITCH MODE</h3>
                          <p>NCT DREAM The 2nd Album</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url('assets/img/hellofuture.jpg'); ?>" alt="Third slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>HELLO FUTURE</h3>
                          <p>NCT DREAM The 1st Album Repackage.</p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="container">
              <div class="row grid mb-5">
                <?php foreach($produk as $p){ ?>
                <div class="col-md-2 col-lg-3 mb-2">
                  <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url()?>uploads/<?= $p->foto?>" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title" style="text-align:center;"><?= $p->namaProduk; ?></h5>
                      <p class="card-text">
                        Rp. <?= $p->harga; ?>
                      </p>
                      <a href="<?php echo site_url('user/login');?>"><i class="menu-icon tf-icons bx bx-cart"></i></a>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
            <!-- / Content -->
          </div>

          
          