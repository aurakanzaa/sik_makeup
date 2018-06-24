<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo base_url('index.php/cashflow/form_cashflow'); ?>"><button type="button" class="btn btn-success "><i class="fa fa-plus"> </i> Tambah Data Cashflow</button></a>
    <br>
    
    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Cashflow</h4>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Id Transaksi</th>
          <th>Id User</th>
          <th>PEMASUKAN</th>
          <th>PENGELUARAN</th>
          <th>UTANG</th>
          <th>PEMBELIAN</th>
          <th>KETERANGAN</th>
          <th align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($cashflow as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->tgl_cashflow ?></td>
          <td><?php echo $key->id_transaksi ?></td>
          <td><?php echo $key->id_user ?></td>
          <td><?php echo $key->PEMASUKAN?></td>
          <td><?php echo $key->PENGELUARAN ?></td>
          <td><?php echo $key->UTANG ?></td>
          <td><?php echo $key->PEMBELIAN ?></td>
          <td><?php echo $key->keterangan ?></td>
        
          <td>
                <a class="btn btn-primary btn-xs" href="<?php echo site_url('cashflow/update/').$key->id_transaksi ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('cashflow/delete/').$key->id_transaksi ?>">
                  <i class="fa fa-trash-o"></i>
                </a>  
          </td>
        </tr>
        <?php } ?>
      <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td><b>Total</b></td>
          <td></td>
          <td><b><?php echo $totalcashflow[0]->PEMASUKAN?></b></td>
          <td><b><?php echo $totalcashflow[0]->PENGELUARAN ?></b></td>
          <td><b><?php echo $totalcashflow[0]->UTANG ?></b></td>
          <td><b><?php echo $totalcashflow[0]->PEMBELIAN ?></b></td>
        </tr>
      </tfoot>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->