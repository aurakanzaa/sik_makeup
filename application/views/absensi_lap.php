<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
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
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->