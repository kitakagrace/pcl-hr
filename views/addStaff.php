<?php

require '../processors/sessionLogger.php';

require '../dbConfig.php' ;

if($connect){
   // echo 'success conect';
}else{
    echo 'failed connection';
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

<html>
<head>
<title>Pcl Live Search</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <link rel="stylesheet" href="../css/addstaff.css">
</head>
<body>
<div class = "form-design">
  <div class="container">
  <div class="card card-margin" style="width: 35rem;">
  <div class="card-body">
  <h5 class="card=title">ADD REP</h5>
<form id="myForm"  action="" method="POST"> 
          <div class="form-group">
          <div class="form-group">
            <label for="exampleInputText1">STAFF NAME</label>
            <input type="text" class="form-control" name="staff_name" required>
            <label for="exampleInputEmail1">PHONE NUMBER</label>
            <input type="number" class="form-control" name="staff_phone_number" required>
            <label for="exampleInputText1">BRANCH</label>
            <input type="text" class="form-control" name="staff_branch" required >
            <label for="exampleInputText1">DATE OF BIRTH</label>
            <input type="text" class="form-control" name="staff_dob" required>
            <label for="exampleInputText1">DATE OF APPOINTMENT</label>
            <input type="text" class="form-control" name="staff_doa" required>
            <label for="exampleInputText1">Confirm Username</label>
            <input type="text" class="form-control" name="added_by" required>
          </div>
          <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
          </div>
      </form>
      <a href="../staff.php"><button class="btn btn-primary">BACK</button></a> 
</div>
</div>
</div>
</div>
</body>
</html>
