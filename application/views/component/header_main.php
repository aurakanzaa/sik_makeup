<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$session_data = $this->session->userdata('userSession');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Makeup</title>
    <link rel="icon" href="<?php echo base_url('/assets/img/cosmetics.png'); ?> ">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
    
    <!--external css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/gritter/css/jquery.gritter.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/lineicons/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style-responsive.css">
    <script src="<?php echo base_url()?>assets/js/chart-master/Chart.js"></script>
    <script><!--
      function startCalc(){
        interval = setInterval("calc()",1);}
        function calc()
          {
            var one = document.getElementById('jumlah').value;
            document.getElementById('total_harga').value = <?php echo $produk[0]->harga_jual; ?> * one;
          }
        function stopCalc(){
        clearInterval(interval);}
    </script>
  </head>

  <body>

  <section id="container" >
<!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>MAKEUP</b></a>
            <!--logo end-->
                    <!-- settings end -->
                   
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                <?php if ($session_data==null) { ?>
                  <li><a class="logout" href="<?php echo base_url(); ?>index.php/login/LoginUser">Login</a></li>
                <?php } else {?>
                    <li><a class="logout" href="<?php echo base_url(); ?>index.php/login/logoutUser">Logout</a></li>
                <?php }  ?>
                    <li><a class="logout" href="<?php echo base_url(); ?>index.php/login/logoutUser">Keranjang</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->


    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src=<?php echo base_url('/assets/img/cosmetics.png') ?> class="img-circle" width="100"></a></p>
                  <?php foreach ($kategori as $key){?>   
                  <li class="sub-menu">
                      <a class="" href="<?php echo site_url('home') ?>">
                          <i class="fa fa-dashboard"></i>
                          <span><?php echo $key->nama_kategori?></span>
                      </a>
                  </li>
                  <?php }?>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
