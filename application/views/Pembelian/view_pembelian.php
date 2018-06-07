<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo base_url('index.php/pembelian/form_pembelian'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Pembelian</button></a>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Pembelian</h4>
        <tr>
          <th>No</th>
          <th>Kode </th>
          <th>Tanggal</th>
          <th>User</th>
          <th>Kode Produk</th>
          <th>Supplier</th>
          <th>Jumlah</th>
          <th>Total</th>
          <th align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($pembelian as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->id_pembelian ?></td>
          <td><?php echo $key->tgl_beli ?></td>
          <td><?php echo $key->id_user ?></td>
          <td><?php echo $key->id_produk ?></td>
          <td><?php echo $key->id_supp ?></td>
          <td><?php echo $key->qty ?></td>
          <td><?php echo $key->harga_total ?></td>
        
          <td>
                <a class="btn btn-primary btn-xs" href="<?php echo site_url('pembelian/update/').$key->id_pembelian ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('pembelian/delete/').$key->id_pembelian ?>">
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