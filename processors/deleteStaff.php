<?php

require 'sessionLogger.php';

require '../dbConfig.php' ;

if($connect){
   // echo 'successful connection';
}else{
    echo 'failed connection';
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