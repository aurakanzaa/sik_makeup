<?php $sess=$this->session->userdata('userSession'); ?>
<?php 
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
?>
<section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> All Products</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
					
					<! -- 2ND ROW OF PANELS -->
					<div class="row">
						<?php foreach ($produk as $key): ?>
							<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="product-panel-2 pn" style="height: 350px; background-color:white; padding-top: 20px; ">
								<div class="badge badge-hot bg-success">Ready</div>
								<img src="<?php echo base_url('bower_components/uploads/'.$key->gambar) ?>"height="100px">
								<h4 class="mt"><?php echo $key->nama_produk ?></h4>
								<h3 class="text-primary"><b><?php echo rupiah($key->harga_jual); ?>,-</b></h3>
								<h5>STOK: <?php echo $key->stok ?></h5>
								<h6><?php echo $key->deskripsi ?></h5>
								<a href="<?php echo site_url('pemesanan/order/').$key->id_produk ?>" class="btn btn-small btn-success">Order</a>
							</div>
						</div><! --/col-md-4 -->
						<?php endforeach ?>
					</div><! --/END 2ND ROW OF PANELS -->