<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table style="margin:20px auto;" border="1">
        <tr>
          <th>No</th>
          <th>Nama Supplier</th>
          <th>Alamat</th>
          <th>No Telpon</th>
          
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
                <?php echo anchor('crud/edit/'.$sup->id_supplier,'Edit'); ?>
                <?php echo anchor('crud/hapus/'.$sup->id_supplier,'Hapus'); ?>
          </td>
        </tr>
        <?php } ?>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->