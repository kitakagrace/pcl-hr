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
    $rep_name = $_POST['rep_name'];
    $rep_phone_number  = $_POST['rep_phone_number'];
    $rep_branch = $_POST['rep_branch'];
    $rep_email = $_POST['rep_email'];
    $rep_payroll_code = $_POST['rep_payroll_code'];
    $query = "INSERT INTO rep_data (rep_name,rep_phone_number,rep_branch,rep_email,rep_payroll_code) VALUES ('$rep_name','$rep_phone_number','$rep_branch','$rep_email','$rep_payroll_code')";

    if (mysqli_query( $connect, $query )) {
        echo "New record created";
    } else {
        echo "Failed to create record";
    }
    mysqli_close($connect);
    header("Location:../reps.php");
}
?>