          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Carousel</h4> -->

              <div class="row">
                <!-- Bootstrap carousel -->
                <div class="col-md">
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
                      <p class="card-text">
                        Stock : <?= $p->stok; ?>
                      </p>
                      <p class="card-text">
                        Weight : <?= $p->berat; ?>
                      </p>
                      <p class="card-text">
                        <?= $p->deskripsi; ?>
                      </p>
                      <a href="<?= base_url(); ?>index.php/user/addtocart/<?= $p->idProduk; ?>" class="btn btn-outline-primary">Add to cart</a>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
            <!-- / Content -->
          </div>


          
          