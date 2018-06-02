<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Edit Golongan</h3><hr>
        <?php echo validation_errors(); ?>  

        <?php echo form_open_multipart('golongan/update/'.$this->uri->segment(3));?>
            <div class="form-group row">
                <div class="col-xs-6">
                    <h3 for="">Golongan</h3>
                    <input name="nama_gol" type="text" class="form-control" id="" value="<?php echo $gol[0]->nama_gol; ?>" >
                </div>
                <div class="col-xs-6">
                    <h3 for="">Gaji Pokok</h3>
                    <input name="gaji_pokok" type="text" class="form-control" id="" value="<?php echo $gol[0]->gaji_pokok; ?>" >
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
        <?php echo form_close(); ?>

    </section>
</section>