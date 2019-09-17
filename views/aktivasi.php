<?php
include_once "../base_url.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mari Belajar Coding</title>
  <meta name="author"content="https://www.maribelajarcoding.com/">
  <meta charset="utf-8">
  <meta name="viewport"content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets2/vendor/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url ?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container"align="center">
  <br>
 <?php
   include '../config/config.php';
   $token=$_GET['t'];
   $sql_cek=mysqli_query($mysqli,"SELECT * FROM users WHERE token='".$token."' and status='belum'");
   $jml_data=mysqli_num_rows($sql_cek);
   if ($jml_data>0) {
    //updatedata users aktif
    mysqli_query($mysqli,"UPDATE users SET status='sudah' WHERE token='".$token."' and status='belum'");
    echo '<div class="alert alert-success">
                        Akun anda sudah aktif, silahkan <a href="index.php">Login</a>
                        </div>';
   }else{
                    //data tidak di temukan
                     echo '<div class="alert alert-warning">
                        Invalid Token!
                        </div>';
                   }
 ?>
</div>
</body>
</html>