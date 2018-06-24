<section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> All Products</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
					
					<! -- 2ND ROW OF PANELS -->
					<div class="row">
						<?php foreach ($produk as $key): ?>
							<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="product-panel-2 pn" style="height: 300px">
								<div class="badge badge-hot bg-success">Ready</div>
								<img src="<?php echo base_url('assets/img/product.jpg') ?>" width="200" alt="">
								<h4 class="mt"><?php echo $key->nama_produk ?></h4>
								<h3 class="text-primary"><b>Rp <?php echo $key->harga_jual ?>,-</b></h3>
								<h5>STOK: <?php echo $key->stok ?></h5>
								<h6><?php echo $key->deskripsi ?></h5>
								<a href="<?php echo site_url('pemesanan/order/').$key->id_produk ?>" class="btn btn-small btn-success">Order</a>
							</div>
						</div><! --/col-md-4 -->
						<?php endforeach ?>
					</div><! --/END 2ND ROW OF PANELS -->