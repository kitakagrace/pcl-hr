<?php

require 'sessionLogger.php';

$servername  = 'localhost';
$username = 'root';
$password = '';
$dbname = "testhouse";

$connect  = mysqli_connect($servername,$username,$password,$dbname);

if($connect){
    echo 'success conect';
}else{
    echo 'failed conect';
}

$id = $_GET['staff_id'];
 

if ($_SESSION["staff_role"]=="admin"){
// Deleting user row of rep from table based on given id
$result_staff = mysqli_query($connect, "DELETE FROM staff_data WHERE staff_id = $id");



if ($result_staff) {
    
    header("Location:../staff.php");
}
}else{
    echo "Not Permitted";
}


?>