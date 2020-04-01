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


if(isset($_POST['submit'])){
if ($_SESSION["staff_role"]=="admin") { 
    $staff_name = $_POST['staff_name'];
    $staff_phone_number  = $_POST['staff_phone_number'];
    $staff_branch = $_POST['staff_branch'];
    $staff_doa = $_POST['staff_doa'];
    $staff_dob = $_POST['staff_dob'];
    $added_by = $_POST['added_by'];
    if ($added_by == $_SESSION["username"]) {
    $query = "INSERT INTO staff_data (staff_name,staff_phone_number,staff_branch,staff_doa,staff_dob,added_by) VALUES ('$staff_name','$staff_phone_number','$staff_branch','$staff_doa','$staff_dob','$added_by')";

    if (mysqli_query( $connect, $query )) {
        echo "New record created";
    } else {
        echo "Failed to create record";
    }
    mysqli_close($connect);
    header("Location:../staff.php");
    }else{
        echo "Invalid Username";
    }
}else{
    echo "You are not quaified to enter this data";
}
}
?>
