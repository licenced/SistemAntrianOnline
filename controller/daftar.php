<?php
    include_once("../config/config.php");
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];
        $nik = $_POST['nik'];
        $token=hash('sha256', md5(date('Y-m-d'))) ;

        echo $email;
        include("mail.php");

        // include database connection file
    
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,password,nik,mobile,status,token) VALUES('$name','$email','$password','$nik','$mobile', 'belum', '$token')");
        header("location: ../views/index.php"); 
    }else {
        echo "HIAHSIAHD";
    }
?>
