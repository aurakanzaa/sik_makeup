<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo base_url('index.php/gaji/form_gaji'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Data Gaji</button></a>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
          
          <h4><i class="fa fa-angle-right"></i> Gaji</h4>
          <hr>
          <tbody>
            <tr>
              <th>Id Gaji</th>
              <th>Total Gaji</th>
              <th>Tanggal</th>
              <th>Status</th>
              <th>Id Admin</th>
              <th align="center">Edit | Delete</th>
            </tr>
            <?php foreach ($gaji as $key): ?>
            <tr>
              <th><?php echo $key->id_gaji ?></th>
              <th><?php echo $key->total_gaji ?></th>
              <th><?php echo $key->tanggal ?></th>
              <th><?php echo $key->status ?></th>
              <th><?php echo $key->id_admin ?></th>
              <td>
                <a class="btn btn-primary btn-xs" href="<?php echo base_url('index.php/gaji/update'); ?>/<?php echo $key->id_gaji ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo base_url('index.php/gaji/delete'); ?>/<?php echo $key->id_gaji ?>">
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