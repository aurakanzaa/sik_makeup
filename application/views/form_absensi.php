<section id="main-content">
    <section class="wrapper">
    	
        
    <!-- <div class="col-md-12 mt">
        <div class="content-panel">
            <table class="table table-hover">   -->
            <h3><i class="fa fa-angle-right"></i> Absen</h3><hr>
            <?php echo validation_errors(); ?>  
           

            <?php echo form_open_multipart('absensi/create');?>
                
            
                <div class="form-group row">
                    <div class="col-xs-3">
                        <h4>Id Admin</h4>
                        <input class="form-control" id="" name="id_admin" type="text">
                    </div>

                    <div class="col-xs-4">
                        <h4>Kehadiran</h4>
                        <input class="form-control" id="" name="tgl_masuk_jam" type="datetime-local">
                    </div>

                    <div class="col-xs-4">
                        <h4>Kepulangan</h4>
                        <input class="form-control" id="" name="tgl_pulang_jam" type="datetime-local">
                    </div>
                    

                    

                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            
                
            
                
            <?php echo form_close(); ?>
            <!-- </table>
        </div>
    </div> -->
    </section>
</section>