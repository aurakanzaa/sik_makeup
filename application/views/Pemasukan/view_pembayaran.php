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
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Pemasukan</h4>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Kode </th>
          <th>Kode Pembayaran</th>
          <th>Pesanan</th>
          <th>Total Pemasukan</th>
          <th align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($pemasukan as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->tgl_pembayaran ?></td>
          <td><?php echo $key->id_pembayaran ?></td>
          <td><?php echo $key->kode_pembayaran?></td>
          <td><?php echo $key->id_pemesanan ?></td>
          <td><?php echo rupiah($key->total_pembayaran) ?></td>
          <td>
                <a class="btn btn-primary btn-xs" href="<?php echo site_url('pembelian/update/').$key->id_pembayaran ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('pembelian/delete/').$key->id_pembayaran ?>">
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