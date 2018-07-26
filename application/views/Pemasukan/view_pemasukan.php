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
    <a href="<?php echo site_url('pemasukan/form_pemasukan'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Pemasukan</button></a>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Pemasukan</h4>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>User</th>
          <th>Nama Pemasukan </th>
          <th>Total Pemasukan</th>
          <th align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($pemasukan as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->tgl_pemasukan ?></td>
          <td><?php echo $key->user ?></td>
          <td><?php echo $key->nama_pemasukan ?></td>
          <td><?php echo rupiah($key->total_pemasukan) ?></td>
          <td>
                <a class="btn btn-primary btn-xs" href="<?php echo site_url('pemasukan/update/').$key->id_pemasukan ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('pemasukan/delete/').$key->id_pemasukan ?>">
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