<?php

$servername  = 'localhost';
$username = 'root';
$password = '';
$dbname = "testhouse";

$connect  = mysqli_connect($servername,$username,$password,$dbname);

if($connect){
    echo 'successful connection';
}else{
    echo 'failed connection';
}

$id = $_GET['staff_id'];
 

// Deleting user row of rep from table based on given id
$result_staff = mysqli_query($connect, "DELETE FROM users WHERE staff_id = $id");



if ($result_staff) {
    
    header("Location:../dashboard/users.php");
}else{
    "User not Deleted";
}



?>