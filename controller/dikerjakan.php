<?php
include_once("../config/config.php");
    if(isset($_POST['dikerjakan'])) {
        $id = $_POST['id'];

        // Update data
        $result = mysqli_query($mysqli, "UPDATE tiket SET keterangan = 'selesai' WHERE id_tiket = '$id'");
        header("location: ../views/dashboard_admin.php"); 
    }

?>