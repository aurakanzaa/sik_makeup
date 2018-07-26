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
    <legend>Filter Neraca</legend>
      <?php echo form_open('neraca/filter'); ?>
          <div class="form-group col-md-3">
            <label class="sr-only" for="">label</label>
            <select name="tahun" id="inputBulan" class="form-control" required="required">
              <?php for ($i=date('Y'); $i >date('Y')-4  ; $i--) {?>
                 <option value="<?php echo $i ?>"><?php echo $i ?></option>
              <?php } ?>
              <option value="2020">2020</option> 
            </select>
          </div>
        
          <button type="submit" class="btn btn-primary">Filter</button>
          <a href="<?php echo site_url('neraca/form_neraca') ?>" class="btn btn-success" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Transaksi</a>
           <a href="<?php echo base_url('index.php/cetak/cetakPdfNeraca/'.$this->uri->segment(1))?>"><button type="button" class="btn btn-warning "><i class="fa fa-plus"> </i> CETAK </button></a>
        <?php echo form_close(); ?>
      <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Neraca </h4> 
        <br>
        <br>
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
          <td><b><?php echo rupiah($activa[0]->A); ?></b></td>
          <td><b><?php echo rupiah($pasiva[0]->A); ?></b></td>
          <td></td>
          <td></td>
        </tr>
      </tfoot>
      </table>
      </div>
      </div><!-- /col-md-12 -->
      
    </section>
    </section><!-- /MAIN CONTENT -->