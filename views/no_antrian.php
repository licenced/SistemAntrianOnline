<?php
session_start();
$tiketbaru = true;

if( ! isset($_SESSION['email'])){ // Jika tidak ada session username berarti dia belum login
    header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
    include_once "../base_url.php";
    include("../config/config.php");

    function kirimsms($tanggal,$no_antri) {
        $userkey = "48tsf3"; //userkey lihat di zenziva
        $passkey = "g6cmyxvl15"; // set passkey di zenziva
        $telepon = $_SESSION['no_hp'];
        $nama = $_SESSION['nama'];
        $message = "Hai $nama Kode Booking Kamu Untuk Tanggal : $tanggal Adalah $no_antri";
        $url = "https://reguler.zenziva.net/apps/smsapi.php";
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        $results = curl_exec($curlHandle);
        curl_close($curlHandle);
    }


    if(isset($_POST['Submit'])) {
        $tgl_form = date("d-m-Y", strtotime($_POST['tanggal']));
        $tgl = str_replace('-','',$tgl_form);
        $cari_kode = mysqli_query($mysqli, "SELECT max(id_tiket) as kode from tiket WHERE id_tiket LIKE '%$tgl%'");
        $cari_kode = mysqli_fetch_array($cari_kode);
        
        $kode=substr($cari_kode['kode'],11 ,13);
        $tambah = $kode+1;
        if($tambah > 20){
            $tiketbaru = false;
        }else {
            if ($tambah<10) {
                $id_tiket="TK".$tgl."-00".$tambah;
            }elseif ($tambah<100) {
                $id_tiket="TK".$tgl."-0".$tambah;
            }else{
                $id_tiket="TK".$tgl."-".$tambah;
            }
    
            $id = $_SESSION['id'];
            $no_plat = $_POST['plat'];
            $no_mesin = $_POST['mesin'];
            $stnk = $_POST['stnk'];
            $tanggal = $_POST['tanggal'];
            $kerusakan = $_POST['kerusakan'];
            $jam_daftar = date('H:i:s');
            $result = mysqli_query($mysqli, "INSERT INTO tiket(id_tiket,no_plat,no_mesin,nama_stnk,tanggal,jam,keluhan,pembuat) VALUES ('$id_tiket','$no_plat','$no_mesin','$stnk','$tanggal','$jam_daftar','$kerusakan','$id')");
            // header("location: ../views/testing.php");
            $no_antri = mysqli_query($mysqli, "SELECT id_tiket FROM tiket WHERE jam='$jam_daftar'");
            $no_antri = mysqli_fetch_array($no_antri);
            kirimsms(date("d/m/Y"),$id_tiket);
        }
    }

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard Antrian Temp</title>
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
                            
                            <li class=""><a title="Tiket" href="dash.php"><i class="fa fa-plus-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Tiket</span></a></li>
                            <li class="active1"><a title="Antrian" href="antrian.php"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Antrian</span></a></li>
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
                                                    
                                                    <li><a href="../controller/logout.php"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
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
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Master Tiket <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
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
                    <div class="col-lg-12 col-md-24 col-sm-12 col-xs-12">
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                    <?php if($tiketbaru){ ?>
                        <h4 class="text-center text-uppercase"><b>Nomor Antrian</b></h4>
                        <div class="jumbotron">
                        <h1 class="display-4">Nomor Antrian Kamu Adalah :</h1>
                        <p style= "font-size:150px"><?php echo $no_antri[0] ?></p>
                        </div>
                    <?php }else { ?>
                        <h4 class="text-center text-uppercase"><b>Perhatian!</b></h4>
                        <div class="jumbotron">
                        <h1 class="display-4">Kuota Hari Sudah Penuh!</h1>
                        </div>
                    <?php } ?>
                    </div>
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
                        <p>Copyright &copy; 2019 D.A.M </p>
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