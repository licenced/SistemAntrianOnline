<?php
session_start();
if( ! isset($_SESSION['email'])){ // Jika tidak ada session username berarti dia belum login
    header("location: loginpage.php"); // Kita Redirect ke halaman index.php karena belum login
  }
include_once("../config/config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="kirim.php">SMS</a><br><br>
<a href="../controller/logout.php">Logout</a>

    <table width='80%' border=1>
    <tr>
        <th>Name</th> 
        <th>Email</th> 
        <th>Password</th> 
        <th>HP</th>
        <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['mobile']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>