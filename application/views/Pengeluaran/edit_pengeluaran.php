
      <section id="main-content">
          <section class="wrapper">
          
          
            <h3><i class="fa fa-angle-right"></i> Edit pengeluaran</h3>
            <?php echo validation_errors(); ?>  
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('pengeluaran/update/'.$this->uri->segment(3),$attr);?>
                      
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama User</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="id_user">
                                  <?php foreach ($user as $key) {?>
                                    <?php if ($key->id==$pengeluaran[0]->id_user) {?>
                                    <option selected value="<?php echo $key->id; ?>"><?php echo $key->nama; ?></option>
                                    <?php } ?>
                                  <option value="<?php echo $key->id; ?>"><?php echo $key->nama; ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>
                         
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Barang</label>
                              <div class="col-sm-5">
                                  <input type="text" name="nama_barang" class="form-control" value="<?php echo $pengeluaran[0]->nama_barang ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga Satuan</label>
                              <div class="col-sm-5">
                                  <input type="number" name="harga_satuan" class="form-control" value="<?php echo $pengeluaran[0]->harga_satuan ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Qty</label>
                              <div class="col-sm-5">
                                  <input type="number" name="qty" class="form-control" value="<?php echo $pengeluaran[0]->qty ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Total Harga</label>
                              <div class="col-sm-5">
                                  <input type="number" name="total_harga" class="form-control" value="<?php echo $pengeluaran[0]->total_harga ?>">
                              </div>
                          </div>

                          

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Pengeluaran</label>
                              <div class="col-sm-5">
                                  <input type="date" name="tanggal_pengeluaran" class="form-control" value="<?php echo $pengeluaran[0]->tanggal_pengeluaran ?>">
                              </div>
                          </div>

                          
                         
                        
                           
                           <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
