
      <section id="main-content">
          <section class="wrapper">
           <!-- <?php echo form_open_multipart('gaji/Update/'.$this->uri->segment(3)); ?> -->
          
            <h3><i class="fa fa-angle-right"></i> Edit Produk</h3>
            <?php echo validation_errors(); ?>  
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                      <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('gaji/Update/'.$this->uri->segment(3),$attr);?>
                       
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Total Gaji</label>
                              <div class="col-sm-5">
                                  <input type="number" name="total_gaji" class="form-control" value="<?php echo $gaji[0]->total_gaji; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-5">
                                  <input type="date" name="tanggal" class="form-control" value="<?php echo $gaji[0]->tanggal; ?>">
                              </div>
                          </div>
                         


                         
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="status">
                                    <option value="aktif">Aktif</option>
                                    <option value="tidak_aktif">Tidak Aktif</option>
                                    
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Id Admin</label>
                              <div class="col-sm-5">
                                  <input type="number" name="id_admin" class="form-control" value="<?php echo $gaji[0]->id_admin; ?>">
                              </div>
                          </div>


                         
                           
                           <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                      
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

