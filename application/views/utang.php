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
    <a href="<?php echo base_url('index.php/utang/form_utang'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Data Utang</button></a>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Utang</h4>
        <tr>
          <th>No</th>
          <th>Id User</th>
          <th>Nama Barang</th>
          <th>Total Utang</th>
          <th>Jumlah Utang</th>
          <th>Sisa Utang</th>
          <th align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($utang as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->id_user ?></td>
          <td><?php echo $key->nama_barang ?></td>
          <td><?php echo rupiah($key->total_utang) ?></td>
          <td><?php echo rupiah($key->jml_utang) ?></td>
          <td><?php echo rupiah($key->sisa_utang) ?></td>
        
          <td>
                <a class="btn btn-primary btn-xs" href="<?php echo site_url('utang/update/').$key->id_utang ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('utang/delete/').$key->id_utang ?>">
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