<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Edit Kategori</h3><hr>
        <?php echo validation_errors(); ?>  

        <?php echo form_open_multipart('kategori/update/'.$this->uri->segment(3));?>
            <div class="form-group">
                <h3 for="">Kategori</h3>
                <input name="nama_kategori" type="text" class="form-control" id="" value="<?php echo $kategori[0]->nama_kategori; ?>" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>

    </section>
</section>