<?php

session_start();

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


if(isset($_POST['submit'])){
    $staff_name = $_POST['staff_name'];
    $staff_password  = $_POST['staff_password'];
    

    $sql = "SELECT staff_id FROM users WHERE staff_name = '$staff_name' and staff_password = '$staff_password'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count == 1) {
        header("location: ../index.php");
     }else {
        echo "Not Found";
     }
  
   
}
?>