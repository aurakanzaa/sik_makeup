
      <section id="main-content">
          <section class="wrapper">
          
          
            <h3><i class="fa fa-angle-right"></i> Edit Supplier</h3>
            <?php echo validation_errors(); ?>  
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('supplier/update/'.$this->uri->segment(3),$attr);?>
                      
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Toko</label>
                              <div class="col-sm-5">
                                  <input type="text" name="nama" class="form-control" value="<?php echo $sup[0]->nama; ?>">
                              </div>
                          </div>
                         
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-5">
                                  <input type="text" name="alamat" class="form-control" value="<?php echo $sup[0]->alamat; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Telp</label>
                              <div class="col-sm-5">
                                  <input type="number" name="no_telp" class="form-control" value="<?php echo $sup[0]->no_telp; ?>">
                              </div>
                          </div>


                  
                         
                        
                           
                           <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
