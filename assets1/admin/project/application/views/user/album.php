          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Carousel</h4> -->

              <div class="row">
                <!-- Bootstrap carousel -->
                <div class="col-md">
                  <h5 class="my-4" style="text-align: center;">NCT ALBUM LIST</h5><br>
                  <div class="container">
              <div class="row grid mb-5">
                <?php foreach($produk as $p){ ?>
                <div class="col-md-2 col-lg-3 mb-2">
                  <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url()?>uploads/<?= $p->foto?>" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title" style="text-align:center;"><?= $p->namaProduk; ?></h5>
                      <p class="card-text">
                        Price : Rp. <?= $p->harga; ?>
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
                      <?php echo anchor('user/tambah_ke_keranjang/'.$p->idProduk,'<div class="btn btn-sm btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></div>') ?>
                
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
                </div>
              </div>
            </div>

            
            <!-- / Content -->
          </div>

          
          