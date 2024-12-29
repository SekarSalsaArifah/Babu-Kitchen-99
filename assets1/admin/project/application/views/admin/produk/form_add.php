          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manajemen Album /</span> Add Album</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-12 col-md-6 col-lg-6">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Form Tambah Album</h5>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>
                    <div class="card-body">
                      <form method="POST" action="<?php echo site_url('produk/save');?>" enctype="multipart/form-data">
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Kategori</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="idkat">
                              <option>Pilih Kategori</option>
                              <?php foreach($kategori as $item) { ?>
                                <option value="<?php echo $item->idkat;?>"><?php echo $item->namakat;?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Nama Album</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="basic-default-name" name="namaProduk" placeholder="Nama Album" />
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Harga</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="basic-default-name" name="harga" placeholder="Harga" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Stok</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="basic-default-name" name="stok" placeholder="Stok" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Berat</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="basic-default-name" name="berat" placeholder="Berat" />
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
                              aria-label="Deskripsi"
                              aria-describedby="basic-icon-default-message2"
                            ></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Foto</label>
                          <div class="col-sm-9">
                            <input type="file" name="foto" />
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
