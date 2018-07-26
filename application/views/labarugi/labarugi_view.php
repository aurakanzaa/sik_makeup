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
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo site_url('labarugi/form_labarugi'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Generate Laba Rugi</button></a>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Laba Rugi</h4>
        <tr>
          <th>No</th>
          <th>Tahun</th>
          <th>User</th>
          <th>Penjualan </th>
          <th>Pengeluaran</th>
          <th>Laba</th>
          <th align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($labarugi as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo date('Y',strtotime($key->tanggal)) ?></td>
          <td><?php echo $key->username ?></td>
          <td><?php echo  rupiah($key->penjualan) ?></td>
          <td><?php echo  rupiah($key->harga_pokok_penjualan) ?></td>
          <td><?php echo rupiah($key->laba_usaha_bersih) ?></td>
          <td>
                <a class="btn btn-primary btn-xs" href="<?php echo site_url('labarugi/update/').$key->id_labarugi ?>">
                  <i class="fa fa-pencil"></i>
                </a>
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('labarugi/delete/').$key->id_labarugi ?>">
                  <i class="fa fa-trash-o"></i>
                </a>
                <a class="btn btn-success btn-xs" href="<?php echo site_url('labarugi/detail/').$key->id_labarugi ?>">
                  <i class="glyphicon glyphicon-book"></i>
                </a>  
          </td>
        </tr>
        <?php } ?>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->