<?php if ($this->session->flashdata('msg')) { ?>
                  <div class="alert alert-primary alert-dismissible m-1 p-2 alert-fixed" id="success-alert">
                  <i class="icon fas fa-check"></i>Selamat! 
                      <?= $this->session->flashdata('msg') ?>
                  </div>
              <?php } ?>
          <!-- Content wrapper -->
          <div class="content-wrapper pt-4">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y mx-4">
            <a href="<?= base_url('menu/add')?>" class="badge badge-info p-2 m-1;" style="scale:100% ; margin-left:1px">Tambah Data</a> 
              
              <!-- <hr class="my-5" /> -->
              <!-- Striped Rows -->
              <div class="row pt-2">
              <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table id='datatable' class="table table-striped">
                  <h5 class="fw-bold py-2 mb-1">Data Menu</h5>
                    <thead>
                      <tr>
                        <th>Nama menu</th>
                        <th>Harga menu</th>
                        <th>Deskripsi</th>
                        <th>Qty</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      
                    <?php 
                    $i=1;
                    foreach($menu as $item) {?>
                      <tr>
                            <td><?php echo $item->nama_menu;?></td>
                            
                            <td><?php echo $item->harga_menu;?></td>
                            <td><?php echo $item->deskripsi;?></td>
                            <td><?php echo $item->qty;?></td>
                            <td><img width="100" src="<?php echo base_url(); ?>uploads/<?php echo $item->gambar; ?>"/></td>
                            <td>
                              <a href="<?php echo site_url('menu/getid/'.$item->id_menu);?>" class="badge badge-warning p-2 m-1;">Edit</a>   
                              <a href="<?php echo site_url('menu/delete/'.$item->id_menu);?>" class="badge badge-danger p-2 m-1;" onclick="return confirm('Yakin Akan Hapus Data Ini?')">Hapus</a>
                            </td>
                      </tr>
                      <?php $i++; } ?>
            
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
              <!--/ Striped Rows -->
            </div>
            <!-- / Content -->
