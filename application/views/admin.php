<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo base_url('index.php/admin/form_admin'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Data Admin</button></a>
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
          <th>Password</th>
          <th>Foto</th>
          <th align="center">Edit | Delete</th>
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
          <td><?php echo $key->password ?></td>
          <td><?php echo $key->foto ?></td>
        
          <td>
                <a class="btn btn-primary btn-xs" href="<?php echo site_url('admin/update/').$key->id ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('admin/delete/').$key->id ?>">
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