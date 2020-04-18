<?php

//This file loggs in users from the index.php

require '../dbConfig.php' ;



if(isset($_POST['submit'])){
    $staff_username = $_POST['staff_username'];
    $staff_password  = $_POST['staff_password'];
    $staff_role = $_POST['staff_role'];

    $sql = "SELECT staff_id FROM users WHERE staff_username = '$staff_username' and staff_password = '$staff_password' and staff_role = '$staff_role' ";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count == 1) {
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $staff_username;
        $_SESSION["staff_role"] = $staff_role;
        header("location: ../home.php");
        if (isset($_SESSION['logged']) && ($t - $_SESSION['logged'] > 1)) {
                      session_destroy();
                      session_unset();
                      header('location: index.php');
            }else {$_SESSION['logged'] = time();} 
     }else {
        echo "User not found";
     }
  
   
}
?>
