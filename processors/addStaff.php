<?php

require 'sessionLogger.php';

require '../dbConfig.php' ;

if($connect){
    echo 'success conect';
}else{
    echo 'failed conect';
}


if(isset($_POST['submit'])){
    if ($_SESSION["staff_role"] == "admin") {
        $staff_name = $_POST['staff_name'];
        $staff_phone_number  = $_POST['staff_phone_number'];
        $staff_branch = $_POST['staff_branch'];
        $staff_dob = $_POST['staff_dob'];
        $staff_doa = $_POST['staff_doa'];
        $added_by = $_POST['added_by'];
        if ($added_by == $_SESSION["username"]) {
            $query = "INSERT INTO staff_data (staff_name,staff_phone_number,staff_branch,staff_dob,staff_doa,added_by) VALUES ('$staff_name','$staff_phone_number','$staff_branch','$staff_dob','$staff_doa','$added_by')";

            if (mysqli_query( $connect, $query )) {
                header("Location:../staff.php");
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

}
?>