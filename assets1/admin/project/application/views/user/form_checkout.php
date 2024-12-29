<section class="book_section layout_padding">
    <div class="container">
      <div class="title">
        <h2>
          ALBUM CHECKOUT
        </h2>
      </div>
      <div class="row">
        
          <div class="form_container">
            <form action="<?php echo site_url('user/save_checkout'); ?>" method="POST" enctype="multipart/form-data">
              <div class="col">
                 <input type="text" class="form-control" name="nama" placeholder="Name" />
              </div>
              <div class="col">
                <input type="text" class="form-control" name="nohp" placeholder="Phone Number" />
              </div>
              <div class="col">
                <input type="text" class="form-control" name="email" placeholder="E-mail" />
              </div>
              <div class="col">
                <input type="number" class="form-control" name="jumlah" placeholder="Qty" />
              </div>                                                         
              <div class="col">
                <select class="form-control" name="idProduk" placeholder="ID Produk">
                <option>Choose Produk</option>
                  <?php foreach($produk as $item) { ?>
                    <option value="<?php echo $item->idProduk;?>"><?php echo $item->idProduk;?> <?php echo $item->namaProduk;?> <?php echo $item->harga;?></option>
                  <?php } ?>
                </select>            
              </div>
              
              <div class="col">
                <select class="form-control" name="alamat" placeholder="Alamat">
                <option>Choose Alamat</option>
                  <?php foreach($member as $item) { ?>
                    <option value="<?php echo $item->alamat;?>"><?php echo $item->alamat;?></option>
                  <?php } ?>
                </select>            
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Checkout</button>
              </div>
            </form>
          </div>
        
      </div>
    </div>
  </section>
  