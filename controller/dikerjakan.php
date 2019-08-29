<?php
include_once("../config/config.php");
    if(isset($_POST['dikerjakan'])) {
        $id = $_POST['id'];

        // Update data
        $result = mysqli_query($mysqli, "UPDATE tiket SET keterangan = 'sedang dikerjakan' WHERE id_tiket = '$id'");
        header("location: ../views/dashboard_admin.php"); 
    }else if(isset($_POST['dikerjakan2'])) {
        $id = $_POST['id'];
        $result = mysqli_query($mysqli, "UPDATE tiket_sesi2 SET keterangan = 'sedang dikerjakan' WHERE id_tiket = '$id'");
        header("location: ../views/dashboard_admin.php"); 

    }

?>