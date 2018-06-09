
      <section id="main-content">
          <section class="wrapper">
          
          
            <h3><i class="fa fa-angle-right"></i> Edit Produk</h3>
            <?php echo validation_errors(); ?>  
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('produk/update/'.$this->uri->segment(3),$attr);?>
                      
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Produk</label>
                              <div class="col-sm-5">
                                  <input type="text" name="nama_produk" class="form-control" value="<?php echo $pro[0]->nama_produk; ?>">
                              </div>
                          </div>
                         
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stok</label>
                              <div class="col-sm-5">
                                  <input type="number" name="stok" class="form-control" value="<?php echo $pro[0]->stok; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga Beli</label>
                              <div class="col-sm-5">
                                  <input type="number" name="harga_beli" class="form-control" value="<?php echo $pro[0]->harga_beli; ?>">
                              </div>
                          </div>


                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga Jual</label>
                              <div class="col-sm-5">
                                  <input type="number" name="harga_jual" class="form-control" value="<?php echo $pro[0]->harga_jual; ?>">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kategori</label>

                              <div class="col-sm-5">
                                  <select class="form-control" name="id_kategori">
                                  <?php foreach ($kategori as $key) {?>
                                    <option value="<?php echo $key->id_kategori; ?>"><?php echo $key->nama_kategori; ?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                              <div class="col-sm-5">
                                  <input type="text" name="deskripsi" class="form-control" value="<?php echo $pro[0]->deskripsi; ?>">
                              </div>
                          </div>

                          
                         
                        
                           
                           <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
