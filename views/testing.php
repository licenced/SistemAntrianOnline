<?php
session_start();
include_once("../config/config.php");
$tgl = date("Y-m-d");
$tiket = mysqli_query($mysqli,"SELECT * FROM tiket WHERE tanggal='$tgl' AND keterangan='belum'");
$nomer = mysqli_fetch_array($tiket);
?>
<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<h1><?php echo "ANTRIAN SEMUA : ".$nomer[0] ?></h1>
</body>
</html>