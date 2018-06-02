<section id="main-content">
    <section class="wrapper">
    	
        
    <!-- <div class="col-md-12 mt">
        <div class="content-panel">
            <table class="table table-hover">   -->
            <h3><i class="fa fa-angle-right"></i> Tambah Golongan</h3><hr>
            <?php echo validation_errors(); ?>  
           

            <?php echo form_open_multipart('golongan/create');?>
                
            
                <div class="form-group row">
                    <div class="col-xs-6">
                        <h4>Golongan</h4>
                        <input class="form-control" id="" name="nama_gol" type="text">
                    </div>
                    <div class="col-xs-6">
                        <h4 for="">Gaji Pokok</h4>
                        <input type="text" class="form-control" id="" name="gaji_pokok">
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