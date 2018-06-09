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
          <th>Stok</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>id_kategori</th>
          <th>Deskripsi</th>
          <th align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($pro as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->nama_produk ?></td>
          <td><?php echo $key->stok ?></td>
          <td><?php echo $key->harga_beli ?></td>
          <td><?php echo $key->harga_jual ?></td>
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