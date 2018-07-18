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
    <div class="col-md-12 mt">
      <div class="content-panel col-md-12" style="padding left: : 20px">
      <h4><i class="fa fa-angle-right"></i> Neraca Tahun <?php foreach ($neraca as $key) { echo date('Y',strtotime($key->tgl_neraca));break; }?></h4>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-right: 0">
        <table class="table table-hover ">
        <tr>
          <th colspan="3" style="text-align: center;">Activa</th>
        </tr>
        <tr>
          <td colspan="3" align="center">Activa Lancar</td>
        </tr>
        <tr>
          <td align="center">No</td>
          <td align="center">Nama</td>
          <td align="center">Total</td>         
        </tr>
        <?php 
        $no=1;
        foreach ($neraca as $key) {
          if($key->jenis=='1'){?>
        <tr>
          <td align="center"><?php echo $no++ ?></td>
          <td align="center"><?php echo $key->keterangan ?></td>
          <td align="right"><?php echo rupiah($key->total_transaksi) ?></td>
        </tr>
          <?php }} ?>
        <tr>
          <td colspan="3" align="center">Activa Tetap</td>
        </tr>
        <?php 
        $no=1;
        foreach ($neraca as $key) {
          if($key->jenis=='2'){?>
        <tr>
          <td align="center"><?php echo $no++ ?></td>
          <td align="center"><?php echo $key->keterangan ?></td>
          <td align="right"><?php echo rupiah($key->total_transaksi) ?></td>
        </tr>
          <?php }} ?>
        <tr>
      </table>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 0">
      <table class="table table-hover" >
        <tr>
          <th colspan="3" style="text-align: center;">Pasiva</th>
        </tr>
        <tr>
          <td colspan="3" align="center">Pasiva Lancar</td>
        </tr>
        <tr>
          <td align="center">No</td>
          <td align="center">Nama</td>
          <td align="center">Total</td>
          
        </tr>
        <tr>
          <?php 
        $no=1;
        foreach ($neraca as $key) {
          if($key->jenis=='3'){?>
        <tr>
          <td align="center"><?php echo $no++ ?></td>
          <td align="center"><?php echo $key->keterangan ?></td>
          <td align="right"><?php echo rupiah($key->total_transaksi) ?></td>
        </tr>
          <?php }} ?>
        <tr>
      </table>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" s>
      <table class="table table-hover">
        <tfoot>
          <td colspan="2" align="center">Total</td>
          <td align="right"><b><?php echo rupiah($activa[0]->A); ?></b></td>
          <td colspan="2" align="center">Total</td>
          <td align="right"><b><?php echo rupiah($pasiva[0]->A); ?></b></td>
        </tfoot>
      </table>
      </div>
      </div>
      </div><!-- /col-md-12 -->
    </section>
    </section><!-- /MAIN CONTENT -->