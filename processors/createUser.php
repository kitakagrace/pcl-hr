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

if(isset($_POST['submit'])){
        $staff_name = $_POST['staff_name'];
        $staff_password  = $_POST['staff_password'];
        $staff_role = $_POST['staff_role'];
        $query = "INSERT INTO users (staff_name,staff_role,staff_password) VALUES ('$staff_name','$staff_role','$staff_password')";

        if (mysqli_query( $connect, $query )) {
            echo "New User created";

        } else {
            echo "Failed to create record";
        }




}


?>