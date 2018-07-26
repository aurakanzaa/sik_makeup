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
    <br><br>
    <h4><i class="fa fa-angle-right"></i> Daftar Neraca </h4>
      <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <tr>
          <th>No</th>
          <th>Id</th>
          <th>Tanggal</th>
          <th>Aktiva</th>
          <th>Pasiva</th>
          <th>Keterangan</th>
        </tr>
        <?php 
        $no = 1;
        foreach($neraca as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->id_neraca ?></td>
          <td><?php echo $key->tgl_neraca ?></td>
          <td a><?php if ($key->jenis==1 || $key->jenis==2)
            {
              echo rupiah($key->total_transaksi);
            } else echo "---"?>    
          </td>
          <td><?php if ($key->jenis==3)
            {
              echo rupiah($key->total_transaksi);
            } else echo "---"?>    
          </td>
          <td><?php echo $key->keterangan ?></td>
        </tr>
        <?php } ?>
      <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td><b>Total</b></td>
          <td><b><?php echo rupiah($activa[0]->A); ?></b></td>
          <td><b><?php echo rupiah($pasiva[0]->A); ?></b></td>
          <td></td>
          <td></td>
        </tr>
      </tfoot>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->