<?php

//This file loggs in users from the index.php

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
    $staff_role = $_POST['staff_role'];

    $sql = "SELECT staff_id FROM users WHERE staff_name = '$staff_name' and staff_password = '$staff_password' and staff_role = '$staff_role' ";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count == 1) {
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $staff_name;
        $_SESSION["staff_role"] = $staff_role;
        header("location: ../home.php");
     }else {
        echo "User not found";
     }
  
   
}
?>