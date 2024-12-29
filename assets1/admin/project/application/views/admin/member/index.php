          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manajemen Member /</span> Data Member</h4>

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
                        <th>Username</th>
                        <th>Nama Konsumen</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $i=1;foreach($member as $item) {?>
                      <tr>
                        <td><?php echo $i;?></td>
                            <td><?php echo $item->username;?></td>
                            <td><?php echo $item->namaKonsumen;?></td>
                            <td><?php echo $item->alamat;?></td>
                            <td><?php echo $item->email;?></td>
                            <td><?php echo $item->tlpn;?></td>
                            <td>
                              <?php if($item->statusAktif=='Y'){?>
                              <div class="badge bg-label-success">Aktif</div>
                              <?php } else{?>
                                <div class="badge bg-label-danger">Tidak Aktif</div> <?php } ?>
                            </td>
                            <td>
                              <?php if($item->statusAktif=='Y'){?>
                                <a href="<?php echo site_url('member/non_aktif/'.$item->idKonsumen);?>" class="btn rounded-pill btn-warning">Non Aktif</a><?php } else {?>
                                  <a href="<?php echo site_url('member/aktif/'.$item->idKonsumen);?>" class="btn rounded-pill btn-primary">Aktif</a>
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
