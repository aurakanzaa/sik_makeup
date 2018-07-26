<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$session_data = $this->session->userdata('userSession');
?>
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
        <h4>Struk</h4>
        <br>
        
        <h5 class="left">Nama User : <?php echo $this->session->userdata('userSession')['nama'];?></h5>

        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Pemesanan</th>
          <th>Jumlah</th>
          <th>Total</th>
         
         
        </tr>
        <?php 
        $no = 1;
        foreach($struk as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->tgl_pembayaran ?></td>
          <td><?php echo $key->nama_produk ?></td>
          <td><?php echo $key->qty?></td>
          <td><?php echo rupiah($key->total_pembayaran)?></td>
          
          
        </tr>
        <?php } ?> 

        

      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->