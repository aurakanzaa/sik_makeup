<section id="main-content">
    <section class="wrapper">
    	
        
    <!-- <div class="col-md-12 mt">
        <div class="content-panel">
            <table class="table table-hover">   -->
            <h3><i class="fa fa-angle-right"></i> Masukan Kode Pembayaran</h3><hr>
            <?php echo validation_errors(); ?>  
           
                <div class="form-group row">
                    <div class="col-xs-3 " align="center">
                        <img class="img-responsive" src="<?php echo base_url('bower_components/uploads/'.$produk[0]->gambar) ?>" >
                    </div>
                    <div class="col-xs-4" style=" padding-left: 50px">
                        <h5>Kode Pemesanan</h5>
                        <h3><?php echo $produk[0]->kode_pemesanan; ?></h3>
                        <h5>Jumlah : <?php echo $produk[0]->qty; ?></h5>   
                        <h5>Produk :<?php echo $produk[0]->id_produk; ?></h5>
                        <h5>Tanggal Pesan : <?php echo $produk[0]->tanggal_pemesanan; ?></h5>
                        <h5>Status Pemesanan : <?php echo $produk[0]->status_pemesanan; ?></h5>          
                        <h3>Rp <?php echo $produk[0]->total_pemesanan; ?></h3>

                    </div>
                    <div class="col-xs-5" style="padding-right: 50px">
                    <?php echo form_open_multipart('pembayaran/create/'.$this->uri->segment(3));?>
                        <h4 for="">Kode Pembayaran</h4>
                        <input type="text" class="form-control" id="" name="kode_pembayaran">
                        <br><br>
                        <div align="center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                    

                </div>
            
                
            
                
            <?php echo form_close(); ?>
            <!-- </table>
        </div>
    </div> -->
    </section>
</section>