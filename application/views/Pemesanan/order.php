
<?php 
function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
 
}
?><!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <!--<br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo base_url('index.php/pembelian/form_pembelian'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Pembelian</button></a>
    <br>-->
    
      <div class="content-panel col-md-12" style="height: 100%; padding-top:40px;padding-bottom:30px; margin-top: 50px">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
          <h2><?php echo $produk[0]->nama_produk ?></h2>
          <img src="<?php echo base_url('bower_components/uploads/'.$produk[0]->gambar) ?>" alt="">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <h2>--------------------------</h2>
          <h3 ><?php echo rupiah($produk[0]->harga_jual) ?> ,-</h3>
          <h5>Stok :<?php echo $produk[0]->stok ?></h5>
          <h5>kategori <?php echo $produk[0]->id_kategori ?></h5>
          <h5><?php echo $produk[0]->deskripsi ?></h5>
            <?php 
            $attr = array('class' => 'form-horizontal style-form');
            echo form_open_multipart('pemesanan/create/'.$this->uri->segment(3),$attr);?>
            <div class="form-group">
              <label>Jumlah</label>
              <div style="width: 300px">
                  <input type="number" name="qty" id="jumlah" class="form-control" onFocus="startCalc();" min="1" onBlur="stopCalc();" max="<?php echo $produk[0]->stok ?>" >
              </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center" style="padding-top: 60px">
         <h5>Total Pemesanan</h5>
         <label style="font-size: 24px">Rp</label><input readonly type=text value='0' name="totals" id="total_harga" readonly style="width: 60%;padding: 6px 12px;font-size: 30px;line-height: 0;border: 0px solid #ccc;text-align: center;">
         <br><br>
         <button type="submit" class="btn btn-small btn-success">Pesan Produk</button>
         <a href="<?php echo site_url('homes') ?>" class="btn btn-small btn-warning">Batal</a>
        </div>
        <?php echo form_close(); ?>
      </div>
      
    </section>
    </section><!-- /MAIN CONTENT -->