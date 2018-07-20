<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$data['ava'] = $session_data['ava'];


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
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                   
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url(); ?>index.php/login/logout">Logout</a></li>
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
              
                  <p class="centered"><a href="profile.html"><img src=<?php echo base_url('/assets/img/admin/').$this->session->userdata('userSession')['foto']; ?> class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $this->session->userdata('userSession')['nama'];?></h5>
                      
                  <li class="mt">
                      <a class="<?php echo $status['home'] ?>" href="<?php echo site_url('home') ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo $status['keuangan'] ?>">
                          <i class="fa fa-money"></i>
                          <span>Keuangan</span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo $status['pembelian'] ?>"><a  href="<?php echo site_url('pembelian') ?>">Pembelian</a></li>
                          <li class="<?php echo $status['pemasukan'] ?>"><a  href="<?php echo site_url('pemasukan') ?>">Pemasukan</a></li>
                          <li class="<?php echo $status['pengeluaran'] ?>"><a  href="<?php echo site_url('Pengeluaran') ?>">Pengeluaran</a></li>
                          <li class="<?php echo $status['utang'] ?>"><a  href="<?php echo site_url('utang') ?>">Utang</a></li>
                          <li class="<?php echo $status['pemesanan'] ?>"><a  href="<?php echo site_url('pemesanan') ?>">Pemesanan</a></li>
                          <li class="<?php echo $status['pembayaran'] ?>"><a  href="<?php echo site_url('pembayaran') ?>">Pembayaran</a></li>
                          <li class="<?php echo $status['cash_flow'] ?>"><a  href="<?php echo site_url('cashflow') ?>">Cash Flow</a></li>
                          <li class="<?php echo $status['neraca'] ?>" ><a  href="<?php echo site_url('neraca') ?>">Neraca</a></li>
                          <li class="" ><a  href="<?php echo site_url('labarugi') ?>">Laba Rugi & Perubahan Modal</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo $status['hrd'] ?>">
                          <i class="fa fa-drivers-license-o"></i>
                          <span>HRD</span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo $status['admin'] ?>"><a  href="<?php echo site_url('admin') ?>">Admin</a></li>
                          <li class="<?php echo $status['absensi'] ?>"><a  href="<?php echo site_url('Absensi') ?>">Absensi</a></li>
                          <li class="<?php echo $status['gaji'] ?>"><a  href="<?php echo site_url('gaji') ?>">Gaji</a></li>
                          <li class="<?php echo $status['golongan'] ?>"><a  href="<?php echo site_url('Golongan') ?>">Golongan</a></li>
                          <li class="<?php echo $status['user'] ?>"><a  href="<?php echo site_url('user') ?>">User</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo $status['produk'] ?>">
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Products</span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo $status['barang'] ?>"><a  href="<?php echo site_url('produk') ?>">Produk</a></li>
                          <li class="<?php echo $status['kategori'] ?>"><a  href="<?php echo site_url('Kategori') ?>">Kategori</a></li>
                          <li class="<?php echo $status['supplier'] ?>"><a  href="<?php echo site_url('Supplier') ?>">Supplier</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
