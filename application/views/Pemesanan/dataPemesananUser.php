<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<?php 
function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
}
?>
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
          <th>Produk</th>
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
          <td><?php echo $key->nama_produk ?></td>
          <td><?php echo $key->qty ?></td>
          <td><?php echo rupiah($key->total_pemesanan) ?></td>
          <?php $status ='Belum dibayar '; $type='red';
          if ($key->status_pemesanan == 1)
            {
               $status = 'Sudah dibayar';
               $type = 'green';
            } ?>
          <td style="color: <?php echo $type ?>"><?php echo $status ?></td>
          <td>
                <?php if ($key->status_pemesanan==1) {?>
                <button disabled class="btn btn-success btn-xs" href="<?php echo site_url('pembayaran/create/').$key->id_pemesanan ?>">
                  <i class="fa fa-money" ></i> Bayar
                </button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button disabled class="btn btn-danger btn-xs" href="<?php echo site_url('pembelian/delete/').$key->id_pemesanan ?>">
                  <i class="fa fa-cross-o"></i> Batalkan
                </button>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url('struk/detail/').$key->id_pemesanan ?>" class="btn btn-success btn-xs" >
                  <i class="glyphicon glyphicon-book"></i> Struk
                </a>
                <?php } else { ?>
                <a class="btn btn-success btn-xs" href="<?php echo site_url('pembayaran/create/').$key->id_pemesanan ?>">
                  <i class="fa fa-money"></i> Bayar
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('pemesanan/deletes/').$key->id_pemesanan ?>">
                  <i class="fa fa-cross-o"></i> Batalkan
                </a>
                <?php } ?>  
          </td>
        </tr>
        <?php } ?>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->