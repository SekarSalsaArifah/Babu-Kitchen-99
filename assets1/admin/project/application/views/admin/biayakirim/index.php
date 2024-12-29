          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manajemen Biaya Kirim /</span> Data Biaya Kirim</h4>

              <!-- <hr class="my-5" /> -->

              <!-- Striped Rows -->
              <div class="row">
              <div class="col-12 col-md-10 col-lg-10">
              <div class="card">
                <h5 class="card-header">
                  <a href="<?php echo site_url('biayakirim/add');?>" class="btn rounded-pill btn-primary">Tambah Biaya Kirim</a>
                </h5>
                    <?php if($this->session->flashdata('success')) :?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <?= $this->session->flashdata('success'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    <?php endif; ?>
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama Kurir</th>
                        <th>Kota Asal</th>
                        <th>Kota Tujuan</th>
                        <th>Kota Ongkos</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $i=1;foreach($biayakirim as $item) {?>
                      <tr>
                        <td><?php echo $i;?></td>
                            <td><?php echo $item->namaKurir;?></td>
                            <td><?php echo $item->KotaAsal;?></td>
                            <td><?php echo $item->KotaTujuan;?></td>
                            <td><?php echo $item->biaya;?></td>
                            <td>
                              <a href="<?php echo site_url('biayakirim/getid/'.$item->idBiayaKirim);?>" class="btn rounded-pill btn-warning">Edit</a>   
                              <a href="<?php echo site_url('biayakirim/delete/'.$item->idBiayaKirim);?>" class="btn rounded-pill btn-danger" onclick="return confirm('Yakin Akan Hapus Data Ini?')">Hapus</a>
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
