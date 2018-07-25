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
            <th> <?php echo $admin[0]->username ?> </th>
          </tr>
          <tr>
            <th> Role </th>
            <th> : </th>
            <th> <?php echo $role[0]->nama_role ?> </th>
          </tr>  
          <tr>
            <th> Kategori </th>
            <th> : </th>
            <th> <?php echo $kategori[0]->nama_kategori ?> </th>
          </tr> 
          <tr>
            <th> Foto </th>
            <th> : </th>
            <th> <?php echo $admin[0]->foto ?> </th>
          </tr>
          
        </table>
        <div align="right" style="padding-right: 50px;padding-bottom: 10px">
          <a class="btn btn-primary " href="<?php echo site_url('admin/update/').$admin[0]->id ?>"><i class="fa fa-pencil"></i> Edit</a>
        </div>
      </div>
    </div>
      
    </section>
    </section><!-- /MAIN CONTENT -->