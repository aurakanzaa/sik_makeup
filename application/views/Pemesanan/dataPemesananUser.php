<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <!--<br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo base_url('index.php/pembelian/form_pembelian'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Pembelian</button></a>
    <br>-->
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Pemesanan</h4>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Kode Pemesanan</th>>
          <th>User</th>
          <th>Kode Produk</th>
          <th>Jumlah</th>
          <th>Total</th>
          <th>Status</th>
          <th align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($pemesanan as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->tanggal_pemesanan ?></td>
          <td><?php echo $key->kode_pemesanan?></td>
          <td><?php echo $key->id_user ?></td>
          <td><?php echo $key->id_produk ?></td>
          <td><?php echo $key->qty ?></td>
          <td><?php echo $key->total_pemesanan ?></td>
          <td><?php echo $key->status_pemesanan ?></td>
          <td>
                <a class="btn btn-success btn-xs" href="<?php echo site_url('pembayaran/create/').$key->id_pemesanan ?>">
                  <i class="fa fa-money"></i> Bayar
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('pembelian/delete/').$key->id_pemesanan ?>">
                  <i class="fa fa-cross-o"></i> Batalkan
                </a>  
          </td>
        </tr>
        <?php } ?>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->