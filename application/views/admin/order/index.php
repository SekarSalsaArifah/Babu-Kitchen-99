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
              
              <!-- <hr class="my-5" /> -->
              <!-- Striped Rows -->
              <div class="row pt-2">
              <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table id='datatable' class="table table-striped">
                  <h5 class="fw-bold py-2 mb-1">Data Member</h5>
                    <thead>
                      <tr>
                      <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Order Date</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      
                    <?php 
                    $i=1;
                    foreach($dibeli as $item) {?>
                      <tr>
                      <td><?php echo $item->id_beli;?></td>
                        <td><?php echo $item->nama;?></td>
                        <td><?php echo $item->alamat;?></td>
                        <td><?php echo $item->telepon;?></td>
                        <td><?php echo $item->tgl_beli;?></td>
                        <td><?php echo $item->total_beli;?></td>
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
