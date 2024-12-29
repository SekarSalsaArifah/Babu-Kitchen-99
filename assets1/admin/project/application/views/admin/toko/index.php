          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manajemen Toko /</span> Data Toko</h4>

              <!-- <hr class="my-5" /> -->

              <!-- Striped Rows -->
              <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <h5 class="card-header">
                </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama Toko</th>
                        <th>Logo</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $i=1;foreach($toko as $item) {?>
                      <tr>
                        <td><?php echo $i;?></td>
                            <td><?php echo $item->namaToko;?></td>
                            <td><?php echo $item->logo;?></td>
                            <td><?php echo $item->deskripsi;?></td>
                            <td>
                              <?php if($item->statusAktif=='Y'){?>
                              <div class="badge bg-label-success">Aktif</div>
                              <?php } else{?>
                                <div class="badge bg-label-danger">Tidak Aktif</div> <?php } ?>
                            </td>
                            <td>
                              <?php if($item->statusAktif=='Y'){?>
                                <a href="<?php echo site_url('toko/non_aktif/'.$item->idToko);?>" class="btn rounded-pill btn-warning">Non Aktif</a><?php } else {?>
                                  <a href="<?php echo site_url('toko/aktif/'.$item->idToko);?>" class="btn rounded-pill btn-primary">Aktif</a>
                                <?php } ?>
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
