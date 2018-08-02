
      <section id="main-content">
          <section class="wrapper">          
            <h3><i class="fa fa-angle-right"></i> Tambah Pembelian</h3>
            <?php echo validation_errors(); ?>  
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-6">
                  <div class="form-panel" style="height: 500px">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('pembelian/create',$attr);?>
                      
                        
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Nama Produk</label>
                              <div class="col-sm-9">
                                  <select class="form-control" name="id_produk" id="id_produk" onFocus="startData();" onBlur="stopData();">
                                  <?php foreach ($produk as $key) {?>
                                    <option value="<?php echo $key->id_produk; ?>"><?php echo $key->nama_produk; ?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                          </div>
                         <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Jumlah</label>
                              <div class="col-sm-9">
                                  <input type="number" name="jumlah" id="jumlah" class="form-control" onFocus="startCalc();" min="1" onBlur="stopCalc();">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Harga Total</label>
                              <div class="col-sm-9">
                                  <input readonly type="number" id="harga_total" name="harga_total" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Harga Barang</label>
                              <div class="col-sm-9">
                                  <input readonly type="number" id="harga_barang" name="harga_barang" class="form-control" value="<?php echo $produk[2]->harga_beli; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Supplier</label>

                              <div class="col-sm-9">
                                  <select class="form-control" name="id_supplier">
                                  <?php foreach ($supplier as $key) {?>
                                    <option value="<?php echo $key->id_supplier; ?>"><?php echo $key->nama; ?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Tanggal</label>
                              <div class="col-sm-9">
                                  <input type="date" name="tanggal" class="form-control">
                              </div>
                          </div>

                          
                         
                        
                           
                           <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-panel" style="height: 500px">
                          <div id="gambar" align="center">
                            <img src="<?php echo base_url('bower_components/uploads/'.$produk[0]->gambar) ?>">
                        </div>
                        </div>
                     </div>       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
