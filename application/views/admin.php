<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<?php
$session_data = $this->session->userdata('userSession');
?>
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>
    <?php echo form_open('admin/form_admin') ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" 
    <?php if ($session_data['gol'] == '3' || $session_data['gol']== '4'|| $session_data['gol']== '6' || $session_data['gol'] == '7'){?>class="btn btn-success disabled"<?php } else {?>
    class="btn btn-success " ><?php } ?><i class="fa fa-plus"> </i> Tambah Data Admin</button>
    <?php echo form_close(); ?>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Admin</h4>
        <tr>
          <th>No</th>
          <th>Id Role</th>
          <th>Id Golongan</th>
          <th>Username</th>
          <th>Foto</th>
          <th align="center">Detail</th>
        </tr>
        <?php 
        $no = 1;
        foreach($admin as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->id_role ?></td>
          <td><?php echo $key->id_golongan ?></td>
          <td><?php echo $key->username ?></td>
          <td><?php echo $key->foto ?></td>
        
          <td>
              <?php if ($session_data['gol'] == '2' || $session_data['gol'] == '5'){?>
                <a class="btn btn-primary btn-xs" href="<?php echo site_url('admin/update/').$key->id ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('admin/delete/').$key->id ?>">
                  <i class="fa fa-trash-o"></i>
              <?php } ?>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-success btn-xs" href="<?php echo site_url('absensi/detail/').$key->id ?>">
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