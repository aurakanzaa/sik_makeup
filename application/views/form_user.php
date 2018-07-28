
      <section id="main-content">
          <section class="wrapper">
          
          
            <h3><i class="fa fa-angle-right"></i> Tambah Data Supplier</h3>
            <?php echo validation_errors(); ?>  
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('user/create',$attr);?>
                      
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Role</label>

                              <!-- <div class="col-sm-5">
                                  <select class="form-control" name="id_role">
                                  <?php foreach ($role as $key) {?>
                                    <option value="<?php echo $key->id_role; ?>"><?php echo $key->nama_role; ?></option>
                                    <?php } ?>
                                  </select>
                              </div> -->

                              <div class="col-sm-5">
                                <?php if ($this->session->userdata('userSession')['role']==2){ ?>
                                  <input type="hidden" name="id_role" class="form-control" value="<?php echo $user[0]->id_role ?>" ><?php } else { ?>
                                  <select class="form-control" name="id_role">
                                  <?php foreach ($role as $key) {?>
                                    <?php if ($key->id_role==$user[0]->id_role) {?>
                                    <option selected value="<?php echo $key->id_role; ?>"><?php echo $key->nama_role; ?></option>
                                    <?php } ?>
                                  <option value="<?php echo $key->id_role; ?>"><?php echo $key->nama_role; ?></option>
                                  <?php } ?>
                                  </select>
                                  <?php } ?>
                              </div>
                          </div>


                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-5">
                                  <input type="text" name="nama" class="form-control">
                              </div>
                          </div>



                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-5">
                                  <input type="text" name="alamat" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-5">
                                  <input type="text" name="email" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="jenis_kelamin">
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-Laki">Laki-laki</option>
                                    
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Telp</label>
                              <div class="col-sm-5">
                                  <input type="text" name="no_telp" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><b>Username</b></label>
                              <div class="col-sm-5">
                                  <input type="text" name="username" class="form-control" placeholder="username">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><b>Password</b></label>
                              <div class="col-sm-5">
                                  <input type="password" name="password" class="form-control" placeholder="password">
                              </div>
                          </div>
                         
                        
                           
                           <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
