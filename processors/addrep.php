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
    if ($_SESSION["staff_role"] == "admin") {
        $rep_name = $_POST['rep_name'];
        $rep_phone_number  = $_POST['rep_phone_number'];
        $rep_branch = $_POST['rep_branch'];
        $rep_email = $_POST['rep_email'];
        $rep_payroll_code = $_POST['rep_payroll_code'];
        $added_by = $_POST['added_by'];
        if ($added_by == $_SESSION["username"]) {
            $query = "INSERT INTO rep_data (rep_name,rep_phone_number,rep_branch,rep_email,rep_payroll_code,added_by) VALUES ('$rep_name','$rep_phone_number','$rep_branch','$rep_email','$rep_payroll_code','$added_by')";

            if (mysqli_query( $connect, $query )) {
                header("Location:../reps.php");
            } else {
                echo "Failed to create record";
            }
            mysqli_close($connect);
        }else{
            echo "Incorrect username";
        }
    }else{
        echo "You are not qualified to enter this data";
    }

    // header("Location:../reps.php");
}
?>