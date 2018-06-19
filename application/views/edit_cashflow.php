
      <section id="main-content">
          <section class="wrapper">
          
          
            <h3><i class="fa fa-angle-right"></i> Upadate Data Cashflow</h3>
            <?php echo validation_errors(); ?>  
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('cashflow/update/'.$this->uri->segment(3),$attr);?>
                      
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">User</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="id_user">
                                  <?php foreach ($user as $key) {?>
                                    <?php if ($key->id==$cashflow[0]->id_user) {?>
                                    <option selected value="<?php echo $key->id; ?>"><?php echo $key->nama; ?></option>
                                    <?php } ?>
                                  <option value="<?php echo $key->id; ?>"><?php echo $key->nama; ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">pembayaran</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="id_pembayaran">
                                  <?php foreach ($pembayaran as $key) {?>
                                    <?php if ($key->id_pembayaran==$cashflow[0]->id_pembayaran) {?>
                                    <option selected value="<?php echo $key->id_pembayaran; ?>"><?php echo $key->id_pembayaran; ?></option>
                                    <?php } ?>
                                  <option value="<?php echo $key->id_pembayaran; ?>"><?php echo $key->id_pembayaran; ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Barang</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="id_pengeluaran">
                                  <?php foreach ($pengeluaran as $key) {?>
                                    <?php if ($key->id_pengeluaran==$cashflow[0]->id_pengeluaran) {?>
                                    <option selected value="<?php echo $key->id_pengeluaran; ?>"><?php echo $key->nama_barang; ?></option>
                                    <?php } ?>
                                  <option value="<?php echo $key->id_pengeluaran; ?>"><?php echo $key->nama_barang; ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Barang Utang</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="id_utang">
                                  <?php foreach ($utang as $key) {?>
                                    <?php if ($key->id_utang==$cashflow[0]->id_utang) {?>
                                    <option selected value="<?php echo $key->id_utang; ?>"><?php echo $key->nama_barang; ?></option>
                                    <?php } ?>
                                  <option value="<?php echo $key->id_utang; ?>"><?php echo $key->nama_barang; ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kode Pembelian</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="id_pembelian">
                                  <?php foreach ($pembelian as $key) {?>
                                    <?php if ($key->id_pembelian==$cashflow[0]->id_user) {?>
                                    <option selected value="<?php echo $key->id_pembelian; ?>"><?php echo $key->id_pembelian; ?></option>
                                    <?php } ?>
                                  <option value="<?php echo $key->id_pembelian; ?>"><?php echo $key->id_pembelian; ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>


                           <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
