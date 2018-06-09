<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo base_url('index.php/supplier/form_supplier'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Data Supplier</button></a>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Supplier</h4>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No Telp</th>
          <th align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($sup as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->nama ?></td>
          <td><?php echo $key->alamat ?></td>
          <td><?php echo $key->no_telp ?></td>
          <td>
                <a class="btn btn-primary btn-xs" href="<?php echo base_url('index.php/supplier/update'); ?>/<?php echo $key->id_supplier ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo base_url('index.php/supplier/delete'); ?>/<?php echo $key->id_supplier ?>">
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