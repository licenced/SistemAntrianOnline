<?php
include_once("../config/config.php");
    if(isset($_POST['verifikasi'])) {
        $id = $_POST['id'];

        // Update data
        $result = mysqli_query($mysqli, "UPDATE tiket SET keterangan = 'selesai' WHERE id_tiket = $id");
        header("location: ../views/dashboard_admin.php"); 
    }else if(isset($_POST['verifikasi-sesi2'])) {
        $id = $_POST['id'];
        $result = mysqli_query($mysqli, "UPDATE tiket_sesi2 SET keterangan = 'selesai' WHERE id_tiket = $id");
        header("location: ../views/dashboard_admin.php"); 

    }

?>