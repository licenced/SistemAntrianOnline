<?php
include_once "../base_url.php";

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/bootstrap.min.css" />
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/fontawesome-all.min.css" />
    <!-- meanmenu icon CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/meanmenu.min.css" />
    <!-- main CSS & morrisjs CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/maindashboard.css" />
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/metisMenu.min.css" />
    <!-- calendar CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/fullcalendar.min.css" />
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/fullcalendar.print.min.css" />
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/style.css" />
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/responsive.css" />
    <!-- modernizr JS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/bootstrap-table.css" />
    
    <style type="text/css">
        .active1{
            background: #fc9992;
        }
    </style>
</head>
<body><div class="left-sidebar-pro" >
    <nav id="sidebar" class="" style="width: 210px">
        <div class="sidebar-header">
            <a href="http://helpdesk.tik.itera.ac.id/">
              <h3 style="color: #D01F05">DASHBOARD</h3>
            </a>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                           <i class="fa big-icon fa-home icon-wrap"></i>
                           <span class="mini-click-non">Master Ticket</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li class=""><a title="Dashboard v.1" href="http://helpdesk.tik.itera.ac.id/user"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Dashboard</span></a></li>
                            <li class="active1"><a title="Dashboard v.2" href="http://helpdesk.tik.itera.ac.id/user/ticket"><i class="fa fa-plus-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ticket</span></a></li>
                            
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>


<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="http://helpdesk.tik.itera.ac.id/">
                        <h3 style="color: #D01F05">HELPDESK TIK - ITERA</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">
                                            <li class="nav-item"><a href="#" class="nav-link" style="color: ">DASHBOARD - Sistem Antrian Online</a>
                                            </li>
                                            <!-- <li class="nav-item"><a href="#" class="nav-link">About</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                                                         <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="badge" style="background: #fff; color: #D01F05">0</span> <i class="fa fa-bell-o" aria-hidden="true"></i>
                                                                                            </a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                       
                                                                                                            </ul>
                                                    <div class="notification-view">
                                                        <a href="#">Clear All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span class="admin-name">Doni Agus Adila</span>
                                                        <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                    </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    
                                                    <li><a href="http://helpdesk.tik.itera.ac.id/login/signout"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Master Ticket <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="http://helpdesk.tik.itera.ac.id/user">Dashboard</a>
                                            </li>
                                            <li><a href="http://helpdesk.tik.itera.ac.id/user/ticket">Ticket</a>
                                            </li>
                                        </ul>
                                    </li>
                                                                    </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcome-heading">
                                        <!-- <form role="search" class="">
                                            <input type="text" placeholder="Search..." class="form-control">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </form> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <!-- <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Dashboard V.1</span>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="section-admin container-fluid">
    <div class="row admin text-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                        <h4 class="text-left text-uppercase"><b>Daftar Tiket</b> <a data-target="#tambah_ticket" id="tambah_mod_ticket" href="#" data-toggle="modal" style="text-decoration:none;" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus-square" aria-hidden="true"></i> Buat Ticket</a></h4>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#1">Belum-Dikerjakan</a></li>
                            <li><a data-toggle="tab" href="#2">Sedang-Dikerjakan</a></li>
                            <li><a data-toggle="tab" href="#3">Selesai-Dikerjakan</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="1" class="tab-pane fade in active table-responsive">
                                <table id="daftar" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="col-md-1">No</th>
                                        <th>No Ticket</th>
                                        <th>Tgl Ticket</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Motor</th>
                                        <th>Plat Nomor</th>
                                        <th>Deskripsi Kerusakan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                    </tbody>
                            </table>
                            </div>
                            <div id="2" class="tab-pane fade">
                                <table id="daftar2" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped table-bordered table-hover table-responsive" style="width: 100%">
                                <thead>
                                    <tr>
                                       <th width="col-md-1">No</th>
                                        <th>No Ticket</th>
                                        <th>Tgl Ticket</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Motor</th>
                                        <th>Plat Nomor</th>
                                        <th>Deskripsi Kerusakan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                    </tbody>
                            </table>
                            </div>
                            <div id="3" class="tab-pane fade">
                                <table id="daftar3" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped table-bordered table-hover table-responsive" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th width="col-md-1">No</th>
                                        <th>No Ticket</th>
                                        <th>Tgl Ticket</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Motor</th>
                                        <th>Plat Nomor</th>
                                        <th>Deskripsi Kerusakan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                    </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Modal Tambah ticket -->
<div class="modal fade" id="tambah_ticket" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Ticket</h4>
        </div>
        <div class="modal-body">
          <div class="panel-body">
                <form id="form_ticket" method="POST">
                 <br>
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th class="col-md-4">No Ticket</th>
                        <td class="col-md-8"><input type="text" name="no_ticket" id="no_ticket" class="form-control" value="TIC-090518-2307" readonly></td>
                    </tr>
                    <tr>
                        <th class="col-md-4">Nama Layanan</th>
                        <td class="col-md-8">
                            <select name="layanan" id="layanan" class="form-control" required>
                                <option value="">---- pilih ----</option>
                                                                <option value="2" >Layanan SSO</option>
                                                                <option value="3" >Layanan E-Learning</option>
                                                                <option value="4" >Layanan Hotspot</option>
                                                                <option value="5" >Layanan E-Mail</option>
                                                                <option value="6" >Jaringan LAN</option>
                                                                <option value="7" >Koneksi Internet</option>
                                                                <option value="8" >Printer</option>
                                                                <option value="9" >Install Ulang PC/Laptop ITERA</option>
                                                                <option value="10" >Request Pengembangan Sistem Informasi</option>
                                                                <option value="11" >Kritik Dan Saran (Terkait Aplikasi/Sistem)</option>
                                                                <option value="12" >Aplikasi Pocket ITERA</option>
                                                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="col-md-4">Keterangan</th>
                        <td class="col-md-8">
                            <textarea id="keterangan" name="keterangan" class="form-control" required>
                                
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <th class="col-md-4">Lokasi</th>
                        <td class="col-md-8">
                            <input type="text" id="lokasi" name="lokasi" class="form-control" placeholder="ex: Kepegawaian" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="col-md-4">Screenshoot (opsinoal)</th>
                        <td class="col-md-8">
                           <input type="File" name="file_upload" id="file_upload" class="form-control">
                        </td>
                    </tr>
                   <!--  <tr>
                        <th class="col-md-4">Waktu Selesai</th>
                        <td class="col-md-8">
                            <input type="text" id="waktu_selesai" name="waktu_selesai" class="form-control tgl" placeholder="">
                        </td>
                    </tr>
                    <tr>
                        <th class="col-md-4">Catatan Teknisi</th>
                        <td class="col-md-8">
                            <textarea id="catatan_teknisi" name="catatan_teknisi" class="form-control">
                                
                            </textarea>
                        </td>
                    </tr> -->
                    <!-- <tr>
                        <th class="col-md-4">Status</th>
                        <td class="col-md-8">
                            <select id="status" name="status" class="form-control">
                                <option value="Belum-Dikerjakan">Belum-Dikerjakan</option>
                                <option value="Sedang-Dikerjakan">Sedang-Dikerjakan</option>
                                <option value="Selesai-Dikerjakan">Selesai-Dikerjakan</option>
                            </select>
                        </td>
                    </tr> -->
                    
                    <tr>
                        <td>
                            <div id="notif_sukses"></div>
                        </td>
                        <td>
                            <div style="float:right;">
                                <input type="submit" name="simpan" value="Simpan" class=" btn btn-warning">
                                
                                <input type="text" style="display: none" name="action" id="action"/>
                            </div>
                        </td>
                    </tr>
                </table>
                </form>
          </div>
        </div>
      </div>
    </div>
</div>



<!-- Delete Modal --> 
    <div class="modal fade" id="modalHapus" role="dialog">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Hapus Data</h4>
            </div>
            <div class="modal-body">
                Anda yakin menghapus data ini ? <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tidak</button> 
                <button type="button" class="btn btn-danger btn_hapus_ticket">Hapus</button>
                <div id="notif"></div>
                <input type="text" style="display: none" name="id_hapus" id="id_hapus">
            </div>
            
          </div>
        </div>
    </div>
<!-- End Delete Modal -->

<!-- Modal Tambah Teknisi -->
<div class="modal fade" id="tambah_teknisi" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Teknisi</h4>
        </div>
        <div class="modal-body">
          <div class="panel-body">
                <form id="form_teknisi" method="POST">
                 <br>
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th class="col-md-4">Nama Teknisi</th>
                        <td class="col-md-8">
                            <select name="teknisi" id="teknisi" class="form-control" required>
                                <option value="">---- pilih ----</option>
                                                                <option value="ridho.magribi@staff.itera.ac.id" >M. Ridho Magribi, S.Kom.</option>
                                                                <option value="okta.pilopa@staff.itera.ac.id" >Okta Pilopa, A. Md., S. Pd. I</option>
                                                                <option value="erga.syafitri@fa.itera.ac.id" >Erga Syafitri, S.Farm., M.Si., Apt.</option>
                                                                <option value="danzen.permana@staff.itera.ac.id" >Danzen Hangga Permana S.Kom</option>
                                                                <option value="arief.apriandi@staff.itera.ac.id" >Arief Apriandi, S.T.</option>
                                                                <option value="edi.saputro@staff.itera.ac.id" >Edi Saputro A.md</option>
                                                                <option value="heru.ruwandar@staff.itera.ac.id" >Heru Ruwandar, S.T.</option>
                                                                <option value="arif.setiawan@staff.itera.ac.id" >Arif Setiawan, S.Kom.</option>
                                                                <option value="adam.japal@staff.itera.ac.id" >Adam Japal, S.Kom.</option>
                                                                <option value="ega.budiman@staff.itera.ac.id" >Ega Budiman, S.Kom.</option>
                                                                <option value="akza.noprian@staff.itera.ac.id" >Akza Noprian</option>
                                                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <div id="notif_sukses"></div>
                        </td>
                        <td>
                            <div style="float:right;">
                                <input type="submit" name="simpan" value="Simpan" class=" btn btn-warning">
                                <input type="text" style="display: none" name="id_tkt" id="id_tkt">
                                <input type="text" style="display: none" name="action" id="action"/>
                            </div>
                        </td>
                    </tr>
                </table>
                </form>
          </div>
        </div>
      </div>
    </div>
</div>

    <br/><br/><br/><br/><br/><br/>
    <div class="footer-copyright-area" style="position: fixed; bottom: 0px; left: 0px;width: 100%">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &copy; 2019 <a href="">Me. </a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- jquery
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/metisMenu/metisMenu.min.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <!-- <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/morrisjs/raphael-min.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/morrisjs/morris.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/morrisjs/morris-active.js"></script> -->
    <!-- morrisjs JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/calendar/moment.min.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/calendar/fullcalendar.min.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/main.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets/Highcharts-5.0.6/highcharts.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/data-table/bootstrap-table.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/data-table/tableExport.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets_jeweler/js/data-table/data-table-active.js"></script>
    <script src="http://helpdesk.tik.itera.ac.id/assets/zoom-master/js/zoom.js"></script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
      var OneSignal = window.OneSignal || [];

        OneSignal.push(function() {
            OneSignal.init({
            appId: "4939f0be-bceb-4df2-a5dc-7951125f918b",
            });
        })

        OneSignal.push(function() {

            var isPushSupported = OneSignal.isPushNotificationsSupported();
            if(isPushSupported) {
                
                OneSignal.isPushNotificationsEnabled(function(isEnable) {
                    if(isEnable){
                        console.log('Notification are Enabled');
                        OneSignal.sendTags({
                            email: 'doni.14116084@student.itera.ac.id',
                            level: 'mahasiswa'
                        }).then(function(tagsSent) {
                            // Callback called when tags have finished sending
                            console.log(tagsSent);   
                        });
                        OneSignal.getUserId(function(userId) {
                            console.log(userId);
                            $.ajax({
                                url: 'http://helpdesk.tik.itera.ac.id/init/storeid',
                                method: 'post',
                                data: {user_id:userId},
                                success: function(res) {
                                    console.log(res);
                                },
                                error: function(err) {
                                    console.log(res)
                                }
                            })
                        })
                    }else{
                        console.log('Notification are not enabled yet');
                        OneSignal.push(function() {
                            OneSignal.showHttpPrompt();
                        });
                    }
                })

            }else {

            }

            
        });
    </script>
    <script type="text/javascript">
            Highcharts.chart('kerusakan', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'bar'
            },
            title: {
                text: 'Frekwensi Ticket Layanan'
            },
            credits: {
                enabled: false
            },
            xAxis: {
            categories: [                ],
            },
            yAxis: {
            min: 0,
            title: {
                text: 'Jumlah ',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'
            },
            plotOptions: {
                bar: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y}',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            },
            series: [{
                name: 'Layanan',
                colorByPoint: true,
                data: [
                                    ] 
            }]
        });
    </script>
    <script type="text/javascript">
    $(document).on('click', '#tambah_mod_ticket', function(e){
        e.preventDefault();
        $('#tambah_ticket').modal();
        $('#action').val('tambah');
        $('#keterangan').val('');
        $('#lokasi').val('');
        $('#layanan').val('');
    });

    $(document).on('submit', '#form_pesan', function(e){
        e.preventDefault();
        $('#notif_sukses').html('Loading...');
        var data = new FormData(document.getElementById('form_pesan'));

        $.ajax({
            url : 'http://helpdesk.tik.itera.ac.id/user/ticket/tambah_pesan',
            type : 'POST',
            data : data,
            processData: false, 
            contentType: false,
            success : function(msg){
                $('#notif_sukses').html(msg);
            }
        });
    });

    $(document).on('submit', '#form_ticket', function(e){
        e.preventDefault();
        $('#notif_sukses').html('Loading...');
        var data = new FormData(document.getElementById('form_ticket'));
        var action = $('#action').val();

        if(action == 'tambah'){
            $.ajax({
                url : 'http://helpdesk.tik.itera.ac.id/user/ticket/tambah_ticket',
                type : 'POST',
                data : data,
                processData: false, 
                contentType: false,
                success : function(msg){
                    $('#notif_sukses').html(msg);
                }
            });
        }else if(action == 'edit'){
            $.ajax({
                url : 'http://helpdesk.tik.itera.ac.id/user/ticket/ubah_ticket',
                type : 'POST',
                data : data,
                processData: false, 
                contentType: false,
                success : function(msg){
                    $('#notif_sukses').html(msg);
                }
            });
        }

    });

    $(document).on('click', '.notif', function(msg){
        var id = $(this).attr('id');
         $.ajax({
            url: 'http://helpdesk.tik.itera.ac.id/admin/ticket/hapus_notif',
            type: 'POST',
            data: 'id='+id
        });
    });
        
</script></body>

</html>
?>