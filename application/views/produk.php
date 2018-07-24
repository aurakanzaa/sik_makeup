<?php 
function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
 
}
?>
<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo base_url('index.php/produk/form_produk'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Produk</button></a>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Produk</h4>
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Gambar</th>
          <th>Stok</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>id_kategori</th>
          <th >Deskripsi</th>
          <th width="100px" align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($pro as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->nama_produk ?></td>
          <td><img src="<?=base_url()?>bower_components/uploads/<?=$key->gambar ?>" style="width:100px;heigth:100px" class="img-responsive"></td>
          <td><?php echo $key->stok ?></td>
          <td><?php echo rupiah($key->harga_beli) ?></td>
          <td><?php echo rupiah($key->harga_jual) ?></td>
          <td><?php echo $key->id_kategori ?></td>
          <td><?php echo $key->deskripsi ?></td>
          <td>
                <a class="btn btn-primary btn-xs" href="<?php echo base_url('index.php/produk/update'); ?>/<?php echo $key->id_produk ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo base_url('index.php/produk/delete'); ?>/<?php echo $key->id_produk ?>">
                  <i class="fa fa-trash-o"></i>
                </a>  
          </td>
        </tr>
        <?php } ?>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->