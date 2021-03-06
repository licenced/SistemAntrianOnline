<?php
session_start();
if( ! isset($_SESSION['email'])){ // Jika tidak ada session username berarti dia belum login
    header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
include_once "../base_url.php";


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard User</title>
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
            <a href="#">
                <h3 style="color: #D01F05">DASHBOARD</h3>
            </a>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                            <i class="fa big-icon fa-home icon-wrap"></i>
                            <span class="mini-click-non">Master Tiket</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            
                            <li class="active1"><a title="Tiket" href="dash.php"><i class="fa fa-arrow-left sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Kembali</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>

<div class="all-content-wrapper">
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
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                                                        
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span class="admin-name"><?php echo $_SESSION['nama'] ?></span>
                                                        <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                    </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="../controller/logout.php"><span class="fa fa-user author-log-ic"></span>Profil</a>
                                                    </li>
                                                    <li><a href="../controller/logout.php"><span class="fa fa-lock author-log-ic"></span>Keluar</a>
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
                                            <li class="active1"><a title="Tiket" href="dash.php"><i class="fa fa-arrow-left sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Kembali</span></a></li>
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
                        <h4 class="text-left text-uppercase"><b>Profil</b> </h4>
                        <br><br>
                <form id="edit_profil" method="POST" action="<?php echo $base_url ?>views/edit_profil.php">        
                <table class="table table-striped table-bordered table-hover">
                    <tr class="text-left">
                        <th class="col-md-4">Nama</th>
                        <td class="col-md-8">
                            <input type="text" name="name" class="form-control-lg" value="<?php echo $_SESSION['nama'] ?>" />
                        </td>
                    </tr>

                    <tr class="text-left">
                        <th class="col-md-4">Email</th>
                        <td class="col-md-8">
                            <input type="text" name="email" class="form-control-lg" value="<?php echo $_SESSION['email'] ?>" />
                        </td>
                    </tr>

                    <tr class="text-left">
                        <th class="col-md-4">Password</th>
                        <td class="col-md-8">
                            <input type="password" name="password" class="form-control-lg" value="<?php echo $_SESSION['password'] ?>" />
                        </td>
                    </tr>

                    <tr class="text-left">
                        <th class="col-md-4">NIK</th>
                        <td class="col-md-8">
                            <input type="text" name="nik" class="form-control-lg" value="<?php echo $_SESSION['nik'] ?>" />
                        </td>
                    </tr>

                    <tr class="text-left">
                        <th class="col-md-4">Tanggal Lahir</th>
                        <td class="col-md-8">
                            <input type="date" name="tanggal_lahir" class="form-control-lg" value="<?php echo $_SESSION['tanggal_lahir'] ?>" />
                        </td>
                    </tr>
                        <td>
                            <div id="notif_sukses"></div>
                        </td>
                        <td>
                            <div style="float:right;">
                                <input type="reset" value="Hapus" class=" btn btn-danger">
                                
                                <input type="text" style="display: none" name="action" id="action"/>
                            </div>
                            <div style="float:right;">
                                <input type="submit" name="Submit" value="Edit" class=" btn btn-warning">
                                
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
</div>

<!-- Modal Tambah ticket -->
<div class="modal fade" id="tambah_ticket" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Tiket</h4>
        </div>
        <div class="modal-body">
            <div class="panel-body">
                <form id="form_ticket" method="POST" action="<?php echo $base_url ?>views/no_antrian.php">
                    <br>
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th class="col-md-4">Tanggal Booking</th>
                        <td class="col-md-8">
                            <input type="date" name="tanggal" required>
                        </td>
                    </tr>

                    <tr>
                        <th class="col-md-4">Jam Booking</th>
                        <td class="col-md-8">
                            <select name="sesi" id="sesi" class="form-control" required>
                                <option value="">---- pilih ----</option>
                                <option value="sesi-1" >Sesi 1 : 08:00-12:00</option>
                                <option value="sesi-2" >Sesi 2 : 13:00-15.30</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th class="col-md-4">No. Plat</th>
                        <td class="col-md-8">
                            <input type="text" name="plat" required>
                        </td>
                    </tr>

                    <tr>
                        <th class="col-md-4">Kerusakan</th>
                        <td class="col-md-8">
                            <textarea id="kerusakan" name="kerusakan" class="form-control" required></textarea>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <div id="notif_sukses"></div>
                        </td>
                        <td>
                            <div style="float:right;">
                                <input type="reset" value="Hapus" class=" btn btn-danger">
                                
                                <input type="text" style="display: none" name="action" id="action"/>
                            </div>
                            <div style="float:right;">
                                <input type="submit" name="Submit" value="Simpan" class=" btn btn-warning">
                                
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

<!-- Modal popup antrian -->
<div class="modal fade" id="buat_tiket" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h1 class="modal-title">Nomor Antrian Kamu</h1>
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
                    <p class="copyright">Copyright &copy; 2019 D.A.M </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- jquery
        ============================================ -->
        <script src="<?php echo $base_url ?>assets/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <!-- <script src="<?php echo $base_url ?>assets/js/morrisjs/raphael-min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/morrisjs/morris.js"></script>
    <script src="<?php echo $base_url ?>assets/js/morrisjs/morris-active.js"></script> 
    morrisjs JS 
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/calendar/moment.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?php echo $base_url ?>assets/js/mains.js"></script>
    <!-- <script src="http://helpdesk.tik.itera.ac.id/assets/Highcharts-5.0.6/highcharts.js"></script> -->
    <script src="<?php echo $base_url ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo $base_url ?>assets/js/data-table/tableExport.js"></script>
    <script src="<?php echo $base_url ?>assets/js/data-table/data-table-active.js"></script>
    <!-- <script src="http://helpdesk.tik.itera.ac.id/assets/zoom-master/js/zoom.js"></script> -->
</body>

</html>
?>