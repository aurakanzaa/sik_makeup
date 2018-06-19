
      <section id="main-content">
          <section class="wrapper">
          
          
            <h3><i class="fa fa-angle-right"></i> Upadate Data Admin</h3>
            <?php echo validation_errors(); ?>  
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                       <?php 
                        $attr = array('class' => 'form-horizontal style-form');
                       echo form_open_multipart('admin/update/'.$this->uri->segment(3),$attr);?>
                      
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">User</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="id_role">
                                  <?php foreach ($role as $key) {?>
                                    <?php if ($key->id_role==$admin[0]->id_role) {?>
                                    <option selected value="<?php echo $key->id_role; ?>"><?php echo $key->nama_role; ?></option>
                                    <?php } ?>
                                  <option value="<?php echo $key->id_role; ?>"><?php echo $key->nama_role; ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Golongan</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="id_golongan">
                                  <?php foreach ($gol as $key) {?>
                                    <?php if ($key->id_gol==$admin[0]->id_golongan) {?>
                                    <option selected value="<?php echo $key->id_gol; ?>"><?php echo $key->nama_gol; ?></option>
                                    <?php } ?>
                                  <option value="<?php echo $key->id_gol; ?>"><?php echo $key->nama_gol; ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>

                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-5">
                                  <input type="text" name="username" class="form-control" value="<?php echo $admin[0]->username ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-5">
                                  <input type="text" name="password" class="form-control" value="<?php echo $admin[0]->password ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto</label>
                              <div class="col-sm-5">
                                  <input type="text" name="foto" class="form-control" value="<?php echo $admin[0]->foto ?>">
                              </div>
                          </div>
                          
                         
                        
                           
                           <input type="submit" class="btn btn-success" value="Buat" name="" id="">
                           
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            <?php echo form_close(); ?>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
