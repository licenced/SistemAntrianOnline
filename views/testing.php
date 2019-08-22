<?php
session_start();
include_once("../config/config.php");
$tgl = date("Y-m-d");
$tiket = mysqli_query($mysqli,"SELECT * FROM tiket WHERE tanggal='$tgl' AND keterangan='belum'");
$nomer = mysqli_fetch_array($tiket);
$tiket2 = mysqli_query($mysqli,"SELECT * FROM tiket_sesi2 WHERE tanggal='$tgl' AND keterangan='belum'");
$nomer2 = mysqli_fetch_array($tiket2);
?>
<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<h1><?php echo "ANTRIAN Sesi 1 : ".$nomer[0] ?></h1>
<h1><?php echo "ANTRIAN Sesi 2 : ".$nomer2[0] ?></h1>
<a href="../controller/reset.php">RESET</a>
</body>
</html>