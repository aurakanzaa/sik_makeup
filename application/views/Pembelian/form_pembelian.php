
      <section id="main-content">
          <section class="wrapper">
          
          
            <h3><i class="fa fa-angle-right"></i> Tambah Pembelian</h3>
            <?php echo validation_errors(); ?>  
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('pembelian/create',$attr);?>
                      
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Produk</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="id_produk">
                                  <?php foreach ($produk as $key) {?>
                                    <option value="<?php echo $key->id_produk; ?>"><?php echo $key->nama_produk; ?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                          </div>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
                              <div class="col-sm-5">
                                  <input type="number" name="jumlah" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga Total</label>
                              <div class="col-sm-5">
                                  <input type="number" name="harga_total" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Supplier</label>

                              <div class="col-sm-5">
                                  <select class="form-control" name="id_supplier">
                                  <?php foreach ($supplier as $key) {?>
                                    <option value="<?php echo $key->id_supplier; ?>"><?php echo $key->nama; ?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-5">
                                  <input type="date" name="tanggal" class="form-control">
                              </div>
                          </div>

                          
                         
                        
                           
                           <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
