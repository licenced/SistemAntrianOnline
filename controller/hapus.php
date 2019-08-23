<?php
include_once("../config/config.php");
    if(isset($_POST['hapus'])) {
        $id = $_POST['id'];

        // Hapus data
        $result = mysqli_query($mysqli, "DELETE FROM tiket WHERE id_tiket = $id");
        header("location: ../views/dashboard_admin.php"); 
    }else if(isset($_POST['hapus-sesi2'])) {
        $id = $_POST['id'];
        $result = mysqli_query($mysqli, "DELETE FROM tiket_sesi2 WHERE id_tiket = $id");
        header("location: ../views/dashboard_admin.php"); 

    }

?>