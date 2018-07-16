<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$data['id'] = $session_data['id'];
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
        
        <h5 class="left">Nama User : <?= $session_data['username'];?></h5>

        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Kode Pemesanan</th>
          <th>Kode Pembayaran</th>
          <th>Kode Produk</th>
          <th>Jumlah</th>
          <th>Total</th>
          
         
        </tr>
        <?php 
        $no = 1;
        foreach($pesan as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->tanggal_pemesanan ?></td>
          <td><?php echo $key->kode_pemesanan?></td>
          <td><?php echo $key->kode_pembayaran?></td>
          
          <td><?php echo $key->nama_produk ?></td>
          <td><?php echo $key->qty ?></td>
          <td><?php echo rupiah($key->total_pemesanan) ?></td>
          
        </tr>
        <?php } ?> 

        <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><b>Total</b></td>
          <td><b><?php echo rupiah($totalstruk[0]->TOTAL)?></b></td>
          
        </tr>
      </tfoot>

      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->