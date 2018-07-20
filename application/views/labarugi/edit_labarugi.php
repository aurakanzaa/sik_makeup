
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
                       echo form_open_multipart('labarugi/update/'.$this->uri->segment(3),$attr);?>
                       <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Modal Awal</label>
                              <div class="col-sm-5">
                                  <input type="number" name="modal_awal" class="form-control" value="<?php echo $perubahan[0]->modal_awal ?>">
                              </div>
                          </div>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Penjualan</label>
                              <div class="col-sm-5">
                                  <input type="number" name="penjualan" class="form-control" value="<?php echo $labarugi[0]->penjualan ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Retur Penjualan</label>
                              <div class="col-sm-5">
                                  <input type="number" name="retur_penjualan" class="form-control" value="<?php echo $labarugi[0]->retur_penjualan ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Potongan Penjualan</label>
                              <div class="col-sm-5">
                                  <input type="number" name="potongan_penjualan" class="form-control" value="<?php echo $labarugi[0]->potongan_penjualan ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga Penjualan</label>
                              <div class="col-sm-5">
                                  <input type="number" name="harga_pokok_penjualan" class="form-control" value="<?php echo $labarugi[0]->harga_pokok_penjualan ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Biaya Operasional</label>
                              <div class="col-sm-5">
                                  <input type="number" name="biaya_operasional" class="form-control" value="<?php echo $labarugi[0]->biaya_operasional ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Biaya Admin</label>
                              <div class="col-sm-5">
                                  <input type="number" name="biaya_admin" class="form-control" value="<?php echo $labarugi[0]->biaya_adm_umum ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Prive</label>
                              <div class="col-sm-5">
                                  <input type="number" name="prive" class="form-control" value="<?php echo $perubahan[0]->prive ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-5">
                                  <input type="date" name="tanggal" class="form-control" value="<?php echo $labarugi[0]->tanggal ?>">
                              </div>
                          <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
