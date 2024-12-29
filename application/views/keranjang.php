<div class="container-fluid"> 
	<br><h4 style="text-align: center;">Cart</h4>
	
	<table class="table table-bordered table-striped table-hover">
	<tr>
		<th style="text-align:center">No</th>
		<th style="text-align:center">Product Name</th>
		<th style="text-align:center">Qty</th>
		<th style="text-align:center">Price</th>
		<th style="text-align:center">Subtotal</th>
	</tr>
	
	<?php
	$no=1;
	foreach($this->cart->contents() as $item) : ?>
	
		<tr>
			<td align="center"><?php echo $no++?></td>
			<td><?php echo $item['name'] ?></td>
			<td align="center"><?php echo $item['qty'] ?></td>
			<td align="right">Rp. <?php echo number_format($item['price'],0,',','.') ?></td>
			<td align="right">Rp. <?php echo number_format($item['subtotal'],0,',','.') ?></td>
		</tr>
	
		<?php endforeach; ?>
		
		<tr> 
			<td colspan="4" align="center">Total</td>
			<td align="right">Rp. <?php echo number_format($this->cart->total(),0,',','.') ?></td>
			
		</tr>
	</table>

	<div align="right">
		<a href="<?= base_url(); ?>index.php/user/hapus_keranjang"><div class="btn rounded-pill btn-danger">Delete cartlist</div></a>
		<a href="<?= base_url(); ?>index.php/user/dashboard"><div class="btn rounded-pill btn-info">Continue Shop</div></a>
		<a href="<?= base_url(); ?>index.php/user/pembayaran"><div class="btn rounded-pill btn-success">Payment</div></a>
	</div>
			
</div>
