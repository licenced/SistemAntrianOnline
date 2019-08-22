<?php
include_once("../config/config.php");
$pindah = mysqli_query($mysqli,"INSERT INTO history_tiket (no_plat,tanggal,sesi,jam,keluhan,keterangan,pembuat) SELECT no_plat,tanggal,sesi,jam,keluhan,keterangan,pembuat FROM tiket");
$hapus = mysqli_query($mysqli,"DELETE FROM tiket");
$pindah2 = mysqli_query($mysqli,"INSERT INTO history_tiket (no_plat,tanggal,sesi,jam,keluhan,keterangan,pembuat) SELECT no_plat,tanggal,sesi,jam,keluhan,keterangan,pembuat FROM tiket_sesi2");
$hapus = mysqli_query($mysqli,"DELETE FROM tiket_sesi2");
$tiket = mysqli_query($mysqli,"ALTER TABLE tiket_sesi2 AUTO_INCREMENT = 1");
header("location: ../views/antrian_admin.php"); // Redirect kembali ke halaman testing.php
?>