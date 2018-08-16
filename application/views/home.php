<?php $sess=$this->session->userdata('userSession'); ?>
<section id="main-content">
  <section class="wrapper site-min-height">
					<div class="row mt">

            <!-- PROFIL START -->
            <!-- <div class="col-md-6 mt" align="center">
              <div class="content-panel">
                <table class="table table-hover" >
                  <tr>
                    <th> Foto </th>
                    <th> : </th>
                    <th> <img src=<?php echo base_url('/assets/img/admin/').$this->session->userdata('userSession')['foto']; ?> class="img-circle" width="150"></th>
                  </tr>
                  <tr>
                    <th> Nama </th>
                    <th> : </th>
                    <th> <?php echo $admin[0]->username ?> </th>
                  </tr>
                  <tr>
                    <th> Role </th>
                    <th> : </th>
                    <th> <?php echo $role[0]->nama_role ?> </th>
                  </tr>  
                  <tr>
                    <th> Golongan </th>
                    <th> : </th>
                    <th> <?php echo $golongan[0]->nama_gol ?> </th>
                  </tr> 
                  
                  
                </table>
                <div align="right" style="padding-right: 50px;padding-bottom: 10px">
                  <a class="btn btn-primary " href="<?php echo site_url('admin/update/').$admin[0]->id ?>"><i class="fa fa-pencil"></i> Edit</a>
                </div>
              </div>
            </div> -->
            <!-- PROFIL END -->

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                  <div class="border-head">
                    <?php foreach ($penjualan as $key){?>
                          <h3>Penjualan Tahun <?php echo date('Y',strtotime($key->tgl_pembayaran)) ?></h3>
                        <?php break;} ?>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000K</span></li>
                              <li><span>8.000K</span></li>
                              <li><span>6.000K</span></li>
                              <li><span>4.000K</span></li>
                              <li><span>2.000K</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <?php foreach ($penjualan as $key){?>
                          <div class="bar">
                              <div class="title"><?php echo date('M',strtotime($key->tgl_pembayaran)) ?></div>
                              <div class="value tooltips" data-original-title="<?php echo $key->total ?>" data-toggle="tooltip" data-placement="top"><?php $per=$key->total/100000; echo $per."%" ?></div>
                          </div>
                        <?php } ?>
                      </div>
                </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <div class="weather-2 pn">
                <div class="weather-2-header">
                  <div class="row centered">
                    <div>
                      <h3 style="color:white;" align="center"><?php echo $admin[0]->username ?></h3>
                    </div>
                    
                  </div>
                </div><!-- /weather-2 header -->
                <div class="row data">
                  <div class="col-sm-6 col-xs-6 goleft">
                    <img src=<?php echo base_url('/assets/img/admin/').$this->session->userdata('userSession')['foto']; ?> class="img-circle" width="120">  
                  </div>
                  <div class="col-sm-6 col-xs-6 goright">
                    <a class="btn btn-small btn-theme04" href="<?php echo site_url('admin/update/').$admin[0]->id ?>"><i class="fa fa-pencil"></i> Edit</a>
                  </div>
                </div>
                <div class="row data">
                  <div class="col-sm-6 col-xs-6 goleft">
                    <h4><b>Role</b></h4>
                    <h5><?php echo $role[0]->nama_role ?></h5>
                  </div>
                  <div class="col-sm-6 col-xs-6 goright">
                    <h4><b>Golongan</b></h4>
                    <h5><?php echo $golongan[0]->nama_gol ?></h5>
                  </div>
              </div>
            </div><! --/col-md-4 -->
            </div>    
          </div>
					</div><!-- /row -->	
          </section>
      </section>

      <!--main content end-->