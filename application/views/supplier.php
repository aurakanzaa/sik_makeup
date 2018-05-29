<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href=""><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Supplier</button></a>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Supplier </h4>
        <tr>
          <th>No</th>
          <th>Nama Supplier</th>
          <th>Alamat</th>
          <th>No Telpon</th>
          <th align="center">Edit | Delete</th> 
        </tr>
        <?php 
        $no = 1;
        foreach($supplier as $sup){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $sup->nama ?></td>
          <td><?php echo $sup->alamat ?></td>
          <td><?php echo $sup->no_telp ?></td>
          <td>
                <a class="btn btn-primary btn-xs" href="">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="">
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