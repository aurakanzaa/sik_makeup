<?php 
function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
 
}
?><!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br><br>
    <legend>Filter Cash Flow</legend>
      <?php echo form_open('cashflow/filter'); ?>
          <div class="form-group col-md-3">
            <label class="sr-only" for="">label</label>
            <select name="tahun" id="inputBulan" class="form-control" required="required">
              <?php for ($i=date('Y'); $i >date('Y')-4  ; $i--) {?>
                 <option value="<?php echo $i ?>"><?php echo $i ?></option>
              <?php } ?> 
            </select>
          </div>
        
          <button type="submit" class="btn btn-primary">Filter</button>
          <a href="<?php echo site_url('neraca/form_neraca') ?>" class="btn btn-success" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Transaksi</a>
        <?php echo form_close(); ?>
        
    <div class="col-md-12 mt">
      <div class="content-panel col-md-12" style="padding left: : 20px">
      <h4><i class="fa fa-angle-right"></i> Neraca </h4>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-right: 0">
        <table class="table table-bordered ">
        <tr>
          <th colspan="3" style="text-align: center;">Activa</th>
        </tr>
        <tr>
          <td colspan="3" align="center">Activa Lancar</td>
        </tr>
        <tr>
          <td align="center">No</td>
          <td align="center">Nama</td>
          <td align="center">Total</td>         
        </tr>
        <tr>
          <td align="center">##</td>
          <td align="center">########</td>
          <td align="center">########</td>
        </tr>
        <tr>
          <td align="center">##</td>
          <td align="center">########</td>
          <td align="center">########</td>
        </tr>
        <tr>
          <td colspan="3" align="center">Activa Tetap</td>
        </tr>
        <tr>
          <td align="center">##</td>
          <td align="center">########</td>
          <td align="center">########</td>
        </tr>
        <tr>
          <td align="center">##</td>
          <td align="center">########</td>
          <td align="center">########</td>
        </tr>
        <tfoot>
          <td colspan="2" align="center">Total</td>
          <td>#########</td>
        </tfoot>
      </table>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 0">
      <table class="table table-bordered" >
        <tr>
          <th colspan="4" style="text-align: center;">Pasiva</th>
        </tr>
        <tr>
          <td colspan="4" align="center">Pasiva Lancar</td>
        </tr>
        <tr>
          <td align="center">No</td>
          <td align="center">Nama</td>
          <td align="center">Qty</td>
          <td align="center">Total</td>
          
        </tr>
        <tr>
          <td align="center">##</td>
          <td align="center">########</td>
          <td align="center">########</td>
          <td align="center">########</td>
        </tr>
        <tr>
          <td align="center">##</td>
          <td align="center">########</td>
          <td align="center">########</td>
          <td align="center">########</td>
        </tr>
        <tr>
          <td align="center">##</td>
          <td align="center">########</td>
          <td align="center">########</td>
          <td align="center">########</td>
        </tr>
        <tr>
          <td align="center">##</td>
          <td align="center">########</td>
          <td align="center">########</td>
          <td align="center">########</td>
        </tr>
        <tr>
          <td align="center">##</td>
          <td align="center">########</td>
          <td align="center">########</td>
          <td align="center">########</td>
        </tr>
        <tfoot>
          <td colspan="3" align="center">Total</td>
          <td>#########</td>
        </tfoot>
      </table>
      </div>
      </div>
      </div><!-- /col-md-12 -->

      <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Neraca </h4>
        <tr>
          <th>No</th>
          <th>Id</th>
          <th>Tanggal</th>
          <th>Aktiva</th>
          <th>Pasiva</th>
          <th>Keterangan</th>
          <th align="center">Edit | Delete</th>
        </tr>
        <?php 
        $no = 1;
        foreach($neraca as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->id_neraca ?></td>
          <td><?php echo $key->tgl_neraca ?></td>
          <td a><?php if ($key->jenis==1 || $key->jenis==2)
            {
              echo rupiah($key->total_transaksi);
            } else echo "---"?>    
          </td>
          <td><?php if ($key->jenis==3)
            {
              echo rupiah($key->total_transaksi);
            } else echo "---"?>    
          </td>
          <td><?php echo $key->keterangan ?></td>
          
          <td>
                <a class="btn btn-primary btn-xs" href="<?php echo site_url('neraca/update/').$key->id_neraca ?>">
                  <i class="fa fa-pencil"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger btn-xs" href="<?php echo site_url('neraca/delete/').$key->id_neraca ?>">
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
        </tr>
      </tfoot>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->