<section id="main-content">
    <section class="wrapper">
    	
          
        <h3><i class="fa fa-angle-right"></i> Tambah Kategori</h3><hr>
        <?php echo validation_errors(); ?>  
       

        <?php echo form_open_multipart('kategori/create');?>
            
        
            <div class="form-group">
                <h3 for="">Kategori</h3>
                <input type="text" class="form-control" id="" name="nama_kategori">

            </div>
        
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>

    </section>
</section>