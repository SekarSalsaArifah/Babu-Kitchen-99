          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manajemen Album /</span> Edit Album</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-12 col-md-6 col-lg-6">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Form Edit Album</h5>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>
                    <div class="card-body">
                      <form method="POST" action="<?php echo site_url('produk/edit');?>" enctype="multipart/form-data">
                      <input type="hidden" name="idProduk" value="<?php echo $produk->idProduk;?>">
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Kategori</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="idkat" value="<?php echo $kategori->namakat;?>">
                              <option>Pilih Kategori</option>
                              <?php foreach($kategori as $item) { ?>
                                <option value="<?php echo $item->idkat;?>"<?php if ($item->namakat == $produk->namakat) echo 'selected'; ?>><?php echo $item->namakat;?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Nama Album</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="basic-default-name" name="namaProduk" placeholder="Nama Album" value="<?php echo $produk->namaProduk;?>" />
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Harga</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="basic-default-name" name="harga" placeholder="Harga" value="<?php echo $produk->harga;?>" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Stok</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="basic-default-name" name="stok" placeholder="Stok" value="<?php echo $produk->stok;?>" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Berat</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="basic-default-name" name="berat" placeholder="Berat" value="<?php echo $produk->berat;?>" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-message">Deskripsi</label>
                          <div class="col-sm-9">
                            <textarea
                              id="basic-default-message"
                              class="form-control"
                              name="deskripsi"
                              placeholder="Deskripsi"
                              value="<?php echo $produk->deskripsi;?>" 
                            ></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Foto</label>
                          <div class="col-sm-9">
                            <input type="file" name="foto" value="<?php echo $produk->foto;?>" />
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-12">
                            <button type="submit" class="btn rounded-pill btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- / Content -->
