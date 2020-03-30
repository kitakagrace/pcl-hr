<?php
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
 
// Deleting user row of rep from table based on given id
$result_rep = mysqli_query($connect, "DELETE FROM rep_data WHERE rep_id = $id");

if ($result_rep) {
    echo "Deleted";
}

if ($result_rep) {
    header("Location:../reps.php");
}

?>