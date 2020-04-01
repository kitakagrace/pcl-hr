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
        $added_by = $n['added_by'];
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
  <h5 class="card=title">VIEW STAFF</h5>
  <div class="form-group">
  <label for="exampleInputText1">STAFF NAME : </label>
  <input type="hidden" class="form-control" name="staff_id" value="<?php echo $staff_id ?>">
  <?php echo $staff_name ?>
  <br/>
  <label for="exampleInputEmail1">PHONE NUMBER : </label>
  <?php echo $staff_phone_number ?>
  <br/>
  <label for="exampleInputText1">BRANCH : </label>
  <?php echo $staff_branch ?>
  <br/>
  <label for="exampleInputText1">DATE OF BIRTH : </label>
  <?php echo $staff_dob ?>
  <br/>
  <label for="exampleInputText1">DATE OF APPOINTMENT : </label>
  <?php echo $staff_doa ?>
  <br/>
  <label for="exampleInputText1">ADDED BY : </label>
  <?php echo $added_by ?>
  </div>
  <a href="staff.php"><button  class="btn btn-primary">BACK</button></a>
  </div>
  </div>
  </div>
  </div>
  </body>
</html>