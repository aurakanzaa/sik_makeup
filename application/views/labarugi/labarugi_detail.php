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
      <div class="content-panel col-md-12" style="padding-left: 60px;padding-right: 70px;">
      <h4><i class="fa fa-angle-right"></i> Laba Rugi Tahun <?php foreach ($labarugi as $key) { echo date('Y',strtotime($key->tanggal));break; }?></h4>
        <table class="table table-striped">
        <tr>
          <td align="left"><B>PENJUALAN</B></td>
          <td align="right"></td>
          <td align="right"><?php echo rupiah($labarugi[0]->penjualan); ?></td>         
        </tr>
        <tr>
          <td align="left"><B>RETUR PENJUALAN</B></td>
          <td align="right"><?php echo rupiah($labarugi[0]->retur_penjualan); ?></td>
          <td align="right"></td>         
        </tr>
        <tr>
          <td align="left"><B>POTONGAN PENJUALAN</B></td>
          <td align="right"><?php echo rupiah($labarugi[0]->potongan_penjualan); ?></td>
          <td align="right"></td>         
        </tr>
        <tr>
          <td align="left"><B>JUMLAH RETUR & POTONGAN</B></td>
          <td align="right"><B><?php echo rupiah($labarugi[0]->jml_retur_potongan_penjualan); ?></B></td>
          <td align="right"></td>         
        </tr>
        <tr>
          <td align="left"><B>PENJUALAN BERSIH</B></td>
          <td align="right"></td>
          <td align="right"><?php echo rupiah($labarugi[0]->penjualan_bersih); ?></td>         
        </tr>
        <tr>
          <td align="left"><B>HARGA POKOK PENJUALAN</B></td>
          <td align="right"><b><?php echo rupiah($labarugi[0]->harga_pokok_penjualan); ?></b></td>
          <td align="right"></td>         
        </tr>
        <tr>
          <td align="left"><B>LABA BRUTO</B></td>
          <td align="right"></td>
          <td align="right"><?php echo rupiah($labarugi[0]->laba_bruto); ?></td>         
        </tr>
        <tr>
          <td align="left" colspan="3"></td>
        </tr>
        <tr>
          <td align="left"><B>BIAYA OPERASIONAL</B></td>
          <td align="right"><?php echo rupiah($labarugi[0]->biaya_operasional); ?></td>
          <td align="right"></td>         
        </tr>
        <tr>
          <td align="left"><B>BIAYA ADMINISTRASI</B></td>
          <td align="right"><?php echo rupiah($labarugi[0]->biaya_adm_umum); ?></td>
          <td align="right"></td>         
        </tr>
        <tr>
          <td align="left"><B>TOTAL BIAYA</B></td>
          <td align="right"><?php echo rupiah($labarugi[0]->total_biaya); ?></td>
          <td align="right"></td>         
        </tr>
        <tr>
          <td align="left"><B>LABA BERSIH</B></td>
          <td align="right"></td>
          <td align="right" style="font-size: 12pt"><b><?php echo rupiah($labarugi[0]->laba_usaha_bersih); ?></b></td>         
        </tr>
      </table>
      
        <h4><i class="fa fa-angle-right"></i> Perubahan Modal Tahun <?php foreach ($labarugi as $key) { echo date('Y',strtotime($key->tanggal));break; }?></h4>
        <table class="table table-bordered">
        <tr>
          <td align="left"><B>Modal Awal Per <?php foreach ($labarugi as $key) { echo date('d F Y',strtotime($key->tanggal));break; }?></B></td>
          <td align="right"></td>
          <td align="right"><?php echo rupiah($perubahan[0]->modal_awal); ?></td>         
        </tr>
        <tr>
          <td colspan="3" align="left"><B>Penambahan Modal</B></td>      
        </tr>
        <tr>
          <td align="left">Laba Bersih</td>
          <td align="right"><?php echo rupiah($labarugi[0]->laba_usaha_bersih); ?></td>
          <td align="right"></td>         
        </tr>
        <tr>
          <td align="left">Prive</td>
          <td align="right"><?php echo rupiah($perubahan[0]->prive); ?></td>
          <td align="right"></td>         
        </tr>
        <tr>
          <td align="left"><b>Total</b></td>
          <td align="right"></td>
          <td align="right"><?php echo rupiah($perubahan[0]->prive+$labarugi[0]->laba_usaha_bersih); ?></td>         
        </tr>
        <tr>
          <td align="left"><b>Modal Akhir 31 Desember <?php foreach ($labarugi as $key) { echo date('Y',strtotime($key->tanggal));break; }?></b></td>
          <td align="right"></td>
          <td align="right" style="font-size: 12pt"><b><?php echo rupiah($perubahan[0]->prive+$labarugi[0]->laba_usaha_bersih+$perubahan[0]->modal_awal); ?></b></td>         
        </tr> 
      </table>
      <input type="submit" class="btn btn-success" value="Cetak" name="" id="">
    </div><!-- /col-md-12 -->
    </section>
    </section><!-- /MAIN CONTENT -->