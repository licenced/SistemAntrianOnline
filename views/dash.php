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
                            
                            <li class="active1"><a title="Tiket" href="dash.php"><i class="fa fa-plus-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tiket</span></a></li>
                            <li class=""><a title="Antrian" href="antrian.php"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Antrian</span></a></li>
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
                                                    <li><a href="../views/profil.php"><span class="fa fa-user author-log-ic"></span>Profil</a>
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
                                            <li><a href="#">Tiket</a>
                                            </li>
                                            <li><a href="#">Antrian</a>
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
                        <h4 class="text-left text-uppercase"><b>Daftar Tiket</b> <a data-target="#tambah_ticket" id="tambah_mod_ticket" href="#" data-toggle="modal" style="text-decoration:none;" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus-square" aria-hidden="true"></i> Buat Tiket</a></h4>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#1">Belum Dikerjakan</a></li>
                            <li><a data-toggle="tab" href="#3">Selesai-Dikerjakan</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="1" class="tab-pane fade in active table-responsive">
                                <table id="daftar" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="col-md-1">No</th>
                                        <th>No Ticket</th>
                                        <th>Tgl Ticket</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>No Handphone</th>
                                        <th>Plat Nomor</th>
                                        <th>Deskripsi Kerusakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include '../config/config.php';
                                        $id = $_SESSION['id'];
                                        $no = 1;
                                        $tiket = mysqli_query($mysqli,"SELECT tiket.*, users.name, users.nik, users.mobile FROM tiket INNER JOIN users ON tiket.pembuat=users.id WHERE pembuat='$id' AND keterangan='belum'");
                                        if($tiket){
                                            while($row = mysqli_fetch_array($tiket))
                                            {
                                                echo "<tr>
                                                <td>".$no++."</td>
                                                <td>".$row['id_tiket']."</td>
                                                <td>".$row['tanggal']."</td>
                                                <td>".$row['name']."</td>
                                                <td>".$row['nik']."</td>
                                                <td>".$row['mobile']."</td>
                                                <td>".$row['no_plat']."</td>
                                                <td>".$row['keluhan']."</td>
                                            </tr>";
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                            </div>

                            <div id="3" class="tab-pane fade">
                                <table id="daftar3" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true"
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
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no2 = 1;
                                $tiket2 = mysqli_query($mysqli,"SELECT tiket.*, users.name, users.nik, users.mobile FROM tiket INNER JOIN users ON tiket.pembuat=users.id WHERE pembuat='$id' AND keterangan='selesai'");
                                if($tiket2){
                                    while($row = mysqli_fetch_array($tiket2))
                                    {
                                        echo "<tr>
                                        <td>".$no2++."</td>
                                        <td>".$row['id_tiket']."</td>
                                        <td>".$row['tanggal']."</td>
                                        <td>".$row['name']."</td>
                                        <td>".$row['nik']."</td>
                                        <td>".$row['mobile']."</td>
                                        <td>".$row['no_plat']."</td>
                                        <td>".$row['keluhan']."</td>
                                    </tr>";
                                    }
                                }        
                                
                                ?>

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
                        <th class="col-md-4">No. Plat</th>
                        <td class="col-md-8">
                            <input type="text" name="plat" required>
                        </td>
                    </tr>

                    <tr>
                        <th class="col-md-4">No. Mesin</th>
                        <td class="col-md-8">
                            <input type="text" name="mesin" required>
                        </td>
                    </tr>

                    <tr>
                        <th class="col-md-4">Nama STNK</th>
                        <td class="col-md-8">
                            <input type="text" name="stnk" required>
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