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
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Cashflow</h4>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Id Transaksi</th>
          <th>PEMASUKAN</th>
          <th>PENGELUARAN</th>
          <th>UTANG</th>
          <th>PEMBELIAN</th>
          <th>KETERANGAN</th>
        </tr>
        <?php 
        $no = 1;
        foreach($cashflow as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->tgl_cashflow ?></td>
          <td><?php echo $key->id_transaksi ?></td>
          <td><?php echo rupiah($key->PEMASUKAN)?></td>
          <td><?php echo rupiah($key->PENGELUARAN) ?></td>
          <td><?php echo rupiah($key->UTANG)?></td>
          <td><?php echo rupiah($key->PEMBELIAN) ?></td>
          <td><?php echo $key->keterangan ?></td>
        
        </tr>
        <?php } ?>
      <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td><b>Total</b></td>
          <td></td>
          <td><b><?php echo rupiah($totalcashflow[0]->PEMASUKAN)?></b></td>
          <td><b><?php echo rupiah($totalcashflow[0]->PENGELUARAN) ?></b></td>
          <td><b><?php echo rupiah($totalcashflow[0]->UTANG) ?></b></td>
          <td><b><?php echo rupiah($totalcashflow[0]->PEMBELIAN) ?></b></td>
        </tr>
      </tfoot>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->