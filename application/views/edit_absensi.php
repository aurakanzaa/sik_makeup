<section id="main-content">
    <section class="wrapper">
    	
        
    <!-- <div class="col-md-12 mt">
        <div class="content-panel">
            <table class="table table-hover">   -->
            <h3><i class="fa fa-angle-right"></i> Absen</h3><hr>
            <?php echo validation_errors(); ?>  
           

            <?php echo form_open_multipart('absensi/update/'.$this->uri->segment(3));?>
            
                <div class="form-group row">
                    <div class="col-xs-6">
                        <h4>Id Admin</h4>
                        <input class="form-control" id="" name="id_admin" type="text">
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