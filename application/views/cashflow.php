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
    <legend>Filter Cash Flow</legend>
      <?php echo form_open('cashflow/filter'); ?>
          <div class="form-group col-md-3">
            <label class="sr-only" for="">label</label>
            <select name="bulan" id="inputBulan" class="form-control" >
              <option value="1">Januari</option>
              <option value="2">Februari</option>
              <option value="3">Maret</option>
              <option value="4">April</option>
              <option value="5">Mei</option>
              <option value="6">Juni</option>
              <option value="7">Juli</option>
              <option value="8">Agustus</option>
              <option value="9">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <label class="sr-only" for="">label</label>
            <select name="tahun" id="inputBulan" class="form-control" required="required">
              <?php for ($i=date('Y'); $i >date('Y')-4  ; $i--) {?>
                 <option value="<?php echo $i ?>"><?php echo $i ?></option>
              <?php } ?> 
            </select>
          </div>
        
          
        
          <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>
        
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Cashflow Bulan <?php echo date('F',strtotime($cashflow[0]->tgl_cashflow)) ?> Tahun <?php echo date('Y',strtotime($cashflow[0]->tgl_cashflow)) ?> </h4>
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