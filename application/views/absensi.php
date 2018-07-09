<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo base_url('index.php/absensi/form_absensi'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Absen Masuk</button></a>
    
    <br>


    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
          
          <h4><i class="fa fa-angle-right"></i> Absensi</h4>
          <hr>
          <tbody>
            <tr>
              <th>No</th>
              <th>Id Absen</th>
              <th>Absen Masuk</th>
              <th>Absen Keluar</th>
              <th>Id Admin</th>
              <th align="center">Aksi</th>
            </tr>
            <?php 
            $no = 1;
            foreach ($absensi as $key): ?>
            <tr>

              <th><?php echo $no++ ?></th>
              <th><?php echo $key->id_absen ?></th>
              <th><?php echo $key->tgl_masuk_jam ?></th>
              <th><?php echo $key->tgl_pulang_jam ?></th>
              <th><?php echo $key->id_admin ?></th>
              <td>
                <a class="btn btn-danger btn-s" href="<?php echo base_url('index.php/absensi/update'); ?>/<?php echo $key->id_absen ?>">
                  <i class="fa fa-times"></i>
                  Absen Keluar
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->