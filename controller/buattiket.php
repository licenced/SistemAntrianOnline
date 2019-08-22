<?php
    session_start();
    include_once("../config/config.php");
    if(isset($_POST['Submit'])) {
        $id = $_SESSION['id'];
        $no_plat = $_POST['plat'];
        $tanggal = $_POST['tanggal'];
        $sesi = $_POST['sesi'];
        $kerusakan = $_POST['kerusakan'];
        $jam_daftar = date('H:i:s');
        $result = mysqli_query($mysqli, "INSERT INTO tiket(no_plat,tanggal,sesi,jam,keluhan,pembuat) VALUES ('$no_plat','$tanggal','$sesi','$jam_daftar','$kerusakan','$id')");
        header("location: ../views/testing.php");
        // $no_antri = mysqli_query($mysqli, "SELECT id_tiket FROM tiket WHERE jam='$jam_daftar'");
        // $no_antri = mysqli_fetch_array($no_antri);
        // echo "ANTRIAN KAMU :".$no_antri[0];
    }else {
        echo "HIAHSIAHD";
    }

?>