<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <br>
    
    <div class="col-md-6 mt">
      <div class="content-panel">
        <table class="table table-hover" >
          <tr>
            <th> Nama </th>
            <th> : </th>
            <th> <?php echo $user[0]->nama ?> </th>
          </tr>
          <tr>
            <th> Username </th>
            <th> : </th>
            <th> <?php echo $user[0]->username ?> </th>
          </tr>  
          <tr>
            <th> Jenis Kelamin </th>
            <th> : </th>
            <th> <?php echo $user[0]->jenis_kelamin ?> </th>
          </tr> 
          <tr>
            <th> Alamat </th>
            <th> : </th>
            <th> <?php echo $user[0]->alamat ?> </th>
          </tr>
          <tr>
            <th> Email </th>
            <th> : </th>
            <th> <?php echo $user[0]->email ?> </th>
          </tr>  
          <tr>
            <th> No Telp </th>
            <th> : </th>
            <th> <?php echo $user[0]->no_telp ?> </th>
          </tr>  
        </table>
        <div align="right" style="padding-right: 50px;padding-bottom: 10px">
          <a class="btn btn-primary " href="<?php echo site_url('user/update/').$user[0]->id ?>"><i class="fa fa-pencil"></i> Edit</a>
        </div>
      </div>
    </div>
      
    </section>
    </section><!-- /MAIN CONTENT -->