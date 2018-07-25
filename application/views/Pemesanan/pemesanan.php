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
          <th>Kode Pemesanan</th>
          <th>Kode Pembayaran</th>
          <th>User</th>
          <th>Kode Produk</th>
          <th>Jumlah</th>
          <th>Total</th>
          <th>Status</th>
          <!-- <th align="center">Edit | Delete</th> -->
        </tr>
        <?php 
        $no = 1;
        foreach($pemesanan as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->tanggal_pemesanan ?></td>
          <td><?php echo $key->kode_pemesanan?></td>
          <td><?php echo $key->kode_pembayaran?></td>
          <td><?php echo $key->nama ?></td>
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
          <!-- <td>
                <a class="btn btn-primary btn-xs" href="<?php echo site_url('pemesanan/update/').$key->id_pemesanan ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('pemesanan/delete/').$key->id_pemesanan ?>">
                  <i class="fa fa-trash-o"></i>
                </a>  
          </td> -->
        </tr>
        <?php } ?>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->