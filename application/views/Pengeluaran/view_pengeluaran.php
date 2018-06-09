<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo base_url('index.php/pengeluaran/form_pengeluaran'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Data</button></a>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Pengeluaran</h4>
        <tr>
          <th>No</th>
          <th>Id Pengeluaran </th>
          <th>Id User</th>
          <th>Nama Barang</th>
          <th>Harga Satuan</th>
          <th>Qty</th>
          <th>Total Harga</th>
          <th>Tanggal Pengeluaran</th>
          <th align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($pengeluaran as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->id_pengeluaran ?></td>
          <td><?php echo $key->id_user ?></td>
          <td><?php echo $key->nama_barang ?></td>
          <td><?php echo $key->harga_satuan ?></td>
          <td><?php echo $key->qty ?></td>
          <td><?php echo $key->total_harga ?></td>
          <td><?php echo $key->tanggal_pengeluaran?></td>
        
          <td>
                <a class="btn btn-primary btn-xs" href="<?php echo site_url('pengeluaran/update/').$key->id_pengeluaran ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('pengeluaran/delete/').$key->id_pengeluaran ?>">
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