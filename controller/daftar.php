<?php
    include_once("../config/config.php");
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $nik = $_POST['nik'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];
        echo $email;

        // include database connection file
    
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,password,nik,mobile) VALUES('$name','$email','$password','$nik','$mobile')");
        header("location: ../views/index.php"); 
    }else {
        echo "HIAHSIAHD";
    }
?>