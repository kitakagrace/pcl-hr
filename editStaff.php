<?php 
error_reporting(0); 
require 'processors/sessionLogger.php' ;
$servername  = 'localhost';
$username = 'root';
$password = '';
$dbname = "testhouse";

$connect  = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_GET['edit'])) {
    $staff_id = $_GET['edit'];
    $update = true;

    $record = mysqli_query($connect, "SELECT * FROM staff_data  WHERE staff_id = $staff_id ");

    if (count($record) == 1) {
        //This code populates the input with input data
        $n = mysqli_fetch_array($record);
        $staff_name = $n['staff_name'];
        $staff_phone_number = $n['staff_phone_number'];
        $staff_branch = $n['staff_branch'];
        $staff_dob = $n['staff_dob'];
        $staff_doa = $n['staff_doa'];
    }
   
}

if (isset($_POST['update'])) {
    if ($_SESSION["staff_role"] == "admin"){
        $staff_name = $_POST['staff_name'];
        $staff_phone_number  = $_POST['staff_phone_number'];
        $staff_branch = $_POST['staff_branch'];
        $staff_doa = $_POST['staff_doa'];
        $staff_dob = $_POST['staff_dob'];
        
    
        mysqli_query($connect, "UPDATE staff_data SET staff_name = '$staff_name' , staff_phone_number = '$staff_phone_number', staff_branch = '$staff_branch', staff_doa = '$staff_doa', staff_dob = '$staff_dob' WHERE staff_id = $staff_id ");
    
        $_SESSION['message'] = "Staff Updated";
    
        header("Location:staff.php");
    }else{
        echo "You are not permitted to edit data";
    }

    
    
}

?>
<html>
<head>
    <title>Pcl Reps Live Search</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <link rel="stylesheet" href="css/edit-info.css">
    
  </head>
  <body>
  <div class = "form-design">
  <div class="container">
  <div class="card card-margin" style="width: 35rem;">
  <div class="card-body">
  <h5 class="card=title">EDIT STAFF</h5>
  <form id="myForm"  action=" " method="POST">
  <div class="form-group">
  <label for="exampleInputText1">REP NAME</label>
  <input type="hidden" class="form-control" name="staff_id" value="<?php echo $staff_id ?>">
  <input type="text" class="form-control" name="staff_name" required  value="<?php echo $staff_name ?>" >
  <label for="exampleInputEmail1">PHONE NUMBER</label>
  <input type="number" class="form-control" name="staff_phone_number" required  value="<?php echo $staff_phone_number ?>">
  <label for="exampleInputText1">BRANCH</label>
  <input type="text" class="form-control" name="staff_branch" required  value="<?php echo $staff_branch ?>" >
  <label for="exampleInputText1">DATE OF BIRTH</label>
  <input type="text" class="form-control" name="staff_dob" required  value="<?php echo $staff_dob ?>" >
  <label for="exampleInputText1">DATE OF APPOINTMENT</label>
  <input type="text" class="form-control" name="staff_doa" required  value="<?php echo $staff_doa ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="update" >Submit Change</button>
  </form>
  <a href="staff.php"><button  class="btn btn-primary">BACK</button></a>
  </div>
  </div>
  </div>
  </div>
  </body>
</html>