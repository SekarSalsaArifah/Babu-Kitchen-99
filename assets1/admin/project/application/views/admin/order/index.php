          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manajemen Order /</span> Data Order</h4>

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
                        <th>ID Konsumen</th>
                        <th>Tanggal Order</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $i=1;foreach($order as $item) {?>
                      <tr>
                        <td><?php echo $i;?></td>
                            <td><?php echo $item->idKonsumen;?></td>
                            <td><?php echo $item->tglOrder;?></td>
                            <td>
                              <?php if($item->statusOrder=='belum_bayar'){?>
                              <div class="badge bg-label-success">Belum Bayar</div>
                              <?php } else if($item->statusOrder=='dikemas'){?>
                              <div class="badge bg-label-danger">Dikemas</div>
                              <?php } else if($item->statusOrder=='dikirim'){?>
                              <div class="badge bg-label-danger">Dikirim</div>
                              <?php } else{?>
                              <div class="badge bg-label-danger">Diterima</div> <?php } ?>
                            </td>
                            <td>
                              <?php if($item->statusOrder=='belum_bayar'){?>
                                <a href="<?php echo site_url('order/dikemas/'.$item->idOrder);?>" class="btn rounded-pill btn-warning">Belum Bayar</a><?php } 
                                else if($item->statusOrder=='dikemas'){?>
                                  <a href="<?php echo site_url('order/dikirim/'.$item->idOrder);?>" class="btn rounded-pill btn-primary">Dikemas</a><?php } 
                                  else if($item->statusOrder=='dikirim'){?>
                                  <a href="<?php echo site_url('order/diterima/'.$item->idOrder);?>" class="btn rounded-pill btn-primary">Dikirim</a><?php } 
                                  else{?>
                                  <a href="<?php echo site_url('order/belum_bayar/'.$item->idOrder);?>" class="btn rounded-pill btn-primary">Diterima</a>
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
