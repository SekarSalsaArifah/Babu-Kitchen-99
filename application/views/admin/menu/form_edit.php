          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y mx-4">
              <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light"></h4>
              <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-8">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Form Edit Menu</h5>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="<?php echo site_url('menu/edit');?>" enctype="multipart/form-data">
                      <input type="hidden" name="id_menu" value="<?php echo $menu->id_menu;?>">
                      <div class="row mb-2">
                        <label class="col-sm-3 col-form-label" for="basic-default-name" >Nama Menu</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control mt-n1" id="basic-default-name" name="nama_menu" placeholder="" value="<?php echo $menu->nama_menu;?>" required>
                        </div>
                      </div>
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Harga Menu</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control mt-n1" id="basic-default-name" name="harga_menu" placeholder="" value="<?php echo $menu->harga_menu;?>" required/>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Deskripsi</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control mt-n1" id="basic-default-name" name="deskripsi" placeholder="" value="<?php echo $menu->deskripsi;?>" required/>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Qty</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control mt-n1" id="basic-default-name" name="qty" placeholder="" value="<?php echo $menu->qty;?>" required/>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Gambar</label>
                          <div class="col-sm-12">
                          <input type="file" class="mt-n1" name="gambar" required>
                          </div>
                        </div> 
                        </div>
                        <div class="row">
                          <div class="col-sm-12 text-left">
                            <button type="submit" class="btn btn-success mb px-4" style="scale:80%; margin-left:-8px;">Simpan</button>
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
