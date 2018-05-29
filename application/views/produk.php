<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table style="margin:20px auto;" border="1">
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>id_kategori</th>
          <th>Deskripsi</th>
        </tr>
        <?php 
        $no = 1;
        foreach($produk as $pro){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $pro->nama_produk ?></td>
          <td><?php echo $pro->stok ?></td>
          <td><?php echo $pro->harga ?></td>
          <td><?php echo $pro->id_kategori ?></td>
          <td><?php echo $pro->deskripsi ?></td>
          <td>
                <?php echo anchor('crud/edit/'.$pro->id_produk,'Edit'); ?>
                <?php echo anchor('crud/hapus/'.$pro->id_produk,'Hapus'); ?>
          </td>
        </tr>
        <?php } ?>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->