
      <section id="main-content">
          <section class="wrapper">
          
          
            <h3><i class="fa fa-angle-right"></i> Tambah Transaksi</h3>
            <?php echo validation_errors(); ?>  
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('neraca/create',$attr);?>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Transaksi</label>
                              <div class="col-sm-5">
                                  <input type="text" name="nama" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                          <label class="col-md-2 control-label">Jenis</label>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                              <select name="jenis" id="inputJenis" class="form-control" required="required">
                              <option value="1">Aktiva Lancar</option>
                              <option value="2">Aktiva Tetap</option>
                              <option value="3">Pasiva Lancar</option>
                              </select>
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
                                  <input type="number" name="total" class="form-control">
                              </div>
                          </div>
                          <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
