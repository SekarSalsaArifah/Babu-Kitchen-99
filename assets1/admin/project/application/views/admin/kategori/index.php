          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Categories Management /</span> Categories Data</h4>

              <!-- <hr class="my-5" /> -->

              <!-- Striped Rows -->
              <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
              <div class="card">
                <h5 class="card-header">
                  <a href="<?php echo site_url('kategori/add');?>" class="btn rounded-pill btn-primary">Add Category</a>
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
                        <th>Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $i=1;foreach($kategori as $item) {?>
                      <tr>
                        <td><?php echo $i;?></td>
                            <td><?php echo $item->namakat;?></td>
                            <td>
                              <a href="<?php echo site_url('kategori/getid/'.$item->idkat);?>" class="btn rounded-pill btn-warning bx bx-edit-alt me-1"> Edit</a>   
                              <a href="<?php echo site_url('kategori/delete/'.$item->idkat);?>" class="btn rounded-pill btn-danger bx bx-trash me-1" onclick="return confirm('Yakin Akan Hapus Data Ini?')"> Delete</a>
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
