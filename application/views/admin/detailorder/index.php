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
                  <h5 class="fw-bold py-2 mb-1">Data Detail Order</h5>
                    <thead>

                    <tr>
                        <th>Nama Pembeli</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <?php foreach($record as $row): ?>
                <tr>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->nama_menu; ?></td>
                    <td><?php echo $row->harga_menu; ?></td>
                    <td><?php echo $row->qty; ?></td>
                    <td><?php echo $row->sub_total; ?></td>
                </tr>
            <?php endforeach; ?>
            
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
              <!--/ Striped Rows -->
            </div>
            <!-- / Content -->
