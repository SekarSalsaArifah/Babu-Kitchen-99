<div class="container-fluid"> 
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
					
				echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
				?>
				</div><br><br>
		
			<h3 style="text-align:center">Input Payment Detail</h3>	
			
			<form method="post" action="<?= base_url(); ?>index.php/user/proses_pesanan">
				
				<div class="form-group">
					<label class="col-sm-3 col-form-label" for="basic-default-name">Full Name</label>
					<input type="text" name="nama" placeholder="Full Name" class="form-control" id="basic-default-name">
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 col-form-label" for="basic-default-name">Address</label>
					<input type="text" name="alamat" placeholder="Address" class="form-control" id="basic-default-name">
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 col-form-label" for="basic-default-name">Phone Number</label>
					<input type="text" name="tlp" placeholder="Phone Number" class="form-control" id="basic-default-name">
				</div>
				
				<div class="form-group">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Courier</label>
                            <select class="form-control" name="idKurir">
                              <option>Choose Courier</option>
                              <?php foreach($kurir as $item) { ?>
                                <option value="<?php echo $item->idKurir;?>"><?php echo $item->namaKurir;?></option>
                              <?php } ?>
                            </select>
                        </div>
				
				<div class="form-group">
					<label class="col-sm-3 col-form-label" for="basic-default-name">Transfer Proof</label>
                          <div class="col-sm-9">
                            <input type="file" name="foto" />
                          </div>
				</div>
				<br>
				<button type="submit" class="btn rounded-pill btn-primary">Order</button>
			</form>
				
			<?php 
		}else
		{
			echo "Keranjang Belanja Anda Masih Kosong";
		}
			?>
		</div>
		
		<div class="col-md-2"></div>	
	</div>
</div>		
		
	