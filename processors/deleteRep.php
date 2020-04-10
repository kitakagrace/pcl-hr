<?php

require 'sessionLogger.php';

require '../dbConfig.php' ;

if($connect){
    // echo 'successful connection';
}else{
    echo 'failed connection';
}

$id = $_GET['rep_id'];
 
if ($_SESSION["staff_role"]=="superadmin"){
    $result_rep = mysqli_query($connect, "DELETE FROM rep_data WHERE rep_id = $id");

if ($result_rep) {
    header("Location:../reps.php");
}
}else{
   echo "Not Permitted"; 
}
// Deleting user row of rep from table based on given id


?>