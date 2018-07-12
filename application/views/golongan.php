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
    <a href="<?php echo base_url('index.php/golongan/form_golongan'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Golongan</button></a>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
          
          <h4><i class="fa fa-angle-right"></i> Golongan</h4>
          <hr>
          <tbody>
            <tr>
              <th>No</th>
              <th>Golongan</th>
              <th>Gaji Pokok</th>
              <th align="center">Edit | Delete</th>
            </tr>
            <?php 
            $no=1;
            foreach ($gol as $key): ?>
            <tr>
              <th><?php echo $no++ ?></th>
              <th><?php echo $key->nama_gol ?></th>
              <th><?php echo rupiah($key->gaji_pokok) ?></th>
              <td>
                <a class="btn btn-primary btn-xs" href="<?php echo base_url('index.php/golongan/update'); ?>/<?php echo $key->id_gol ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo base_url('index.php/golongan/delete'); ?>/<?php echo $key->id_gol ?>">
                  <i class="fa fa-trash-o"></i>
                </a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->