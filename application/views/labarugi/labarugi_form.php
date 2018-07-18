
      <section id="main-content">
          <section class="wrapper">
          
          
            <h3><i class="fa fa-angle-right"></i> Tambah Laba Rugi</h3>
            <?php echo validation_errors(); ?>  
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('labarugi/create',$attr);?>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Penjualan</label>
                              <div class="col-sm-5">
                                  <input type="number" name="penjualan" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Retur Penjualan</label>
                              <div class="col-sm-5">
                                  <input type="number" name="retur_penjualan" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Potongan Penjualan</label>
                              <div class="col-sm-5">
                                  <input type="number" name="potongan_penjualan" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga Penjualan</label>
                              <div class="col-sm-5">
                                  <input type="number" name="harga_pokok_penjualan" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Biaya Operasional</label>
                              <div class="col-sm-5">
                                  <input type="number" name="biaya_operasional" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Biaya Admin</label>
                              <div class="col-sm-5">
                                  <input type="number" name="biaya_admin" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-5">
                                  <input type="date" name="tanggal" class="form-control">
                              </div>
                          <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
