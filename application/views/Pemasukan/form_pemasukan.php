
      <section id="main-content">
          <section class="wrapper">
          
          
            <h3><i class="fa fa-angle-right"></i> Tambah Pemasukan</h3>
            <?php echo validation_errors(); ?>  
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('pemasukan/create',$attr);?>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Pemasukan</label>
                              <div class="col-sm-5">
                                  <input type="text" name="nama" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-5">
                                  <input type="date" name="tanggal" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Total</label>
                              <div class="col-sm-5">
                                  <input type="number" name="total_pemasukan" class="form-control">
                              </div>
                          </div>
                          <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
