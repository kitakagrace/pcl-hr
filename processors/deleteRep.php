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

$id = $_GET['rep_id'];
 
if ($_SESSION["staff_role"]=="admin"){
    $result_rep = mysqli_query($connect, "DELETE FROM rep_data WHERE rep_id = $id");

if ($result_rep) {
    header("Location:../reps.php");
}
}else{
   echo "Not Permitted"; 
}
// Deleting user row of rep from table based on given id


?>