
      <section id="main-content">
          <section class="wrapper">
          
          
            <h3><i class="fa fa-angle-right"></i> Tambah Pengeluaran</h3>
            <?php echo validation_errors(); ?>  
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('pengeluaran/create',$attr);?>
                      
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">User</label>

                              <div class="col-sm-5">
                                  <select class="form-control" name="id_user">
                                  <?php foreach ($user as $key) {?>
                                    <option value="<?php echo $key->id; ?>"><?php echo $key->nama; ?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                          </div>


                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Barang</label>
                              <div class="col-sm-5">
                                  <input type="text" name="nama_barang" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga Satuan</label>
                              <div class="col-sm-5">
                                  <input type="number" name="harga_satuan" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">qty</label>
                              <div class="col-sm-5">
                                  <input type="number" name="qty" class="form-control">
                              </div>
                          </div>


                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Total Harga</label>
                              <div class="col-sm-5">
                                  <input type="number" name="total_harga" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tgl Pengeluaran</label>
                              <div class="col-sm-5">
                                  <input type="date" name="tanggal_pengeluaran" class="form-control">
                              </div>
                          </div>

                          
                         
                        
                           
                           <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
