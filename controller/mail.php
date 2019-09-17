<?php
    include_once "../base_url.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require '../vendor/autoload.php';
    $mail = new PHPMailer(true);                  
    $mail->SMTPDebug = 0;                                
    $mail->isSMTP();                            
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;  
    //ganti dengan email dan passwordyang akan di gunakan sebagai email pengirim                  
    $mail->Username = 'hondaskripsi@gmail.com';       
    $mail->Password= 'lulus2019';                       
    $mail->SMTPSecure = 'tls';                           
    $mail->Port = 587;                                  
    //ganti dengan email dan nama kamu
    $mail->setFrom('hondaskripsi@gmail.com', 'Admin');
    $mail->addAddress($_POST['email'], $_POST['name']);     
    $mail->isHTML(true);                                 
    $mail->Subject = "Aktivasi pendaftaran Member";
    $mail->Body    = "Selemat, anda berhasil membuat akun. Untuk mengaktifkan akun anda silahkan klik link dibawah ini.<br> <a href='".$base_url."/views/aktivasi.php?t=".$token."'>Sini</a>";
    $mail->send();
?>