<?php 
error_reporting(0); 
require 'processors/sessionLogger.php' ;
$servername  = 'localhost';
$username = 'root';
$password = '';
$dbname = "testhouse";

$connect  = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_GET['edit'])) {
    $rep_id = $_GET['edit'];
    $update = true;

    $record = mysqli_query($connect, "SELECT * FROM rep_data  WHERE rep_id = $rep_id ");

    if (count($record) == 1) {
        //This code populates the input with input data
        $n = mysqli_fetch_array($record);
        $rep_name = $n['rep_name'];
        $rep_phone_number = $n['rep_phone_number'];
        $rep_branch = $n['rep_branch'];
        $rep_email = $n['rep_email'];
        $rep_payroll_code = $n['rep_payroll_code'];
    }
   
}

if (isset($_POST['update'])) {
    if ($_SESSION["staff_role"] == "admin"){
        $rep_id = $_POST['rep_id'];
        $rep_name = $_POST['rep_name'];
        $rep_phone_number = $_POST['rep_phone_number'];
        $rep_branch = $_POST['rep_branch'];
        $rep_email = $_POST['rep_email'];
        $rep_payroll_code = $_POST['rep_payroll_code'];
    
        mysqli_query($connect, "UPDATE rep_data SET rep_name = '$rep_name' , rep_phone_number = '$rep_phone_number', rep_branch = '$rep_branch', rep_email = '$rep_email', rep_payroll_code = '$rep_payroll_code' WHERE rep_id = $rep_id ");
    
        $_SESSION['message'] = "Rep Updated";
    
        header("Location:reps.php");
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
  <h5 class="card=title">EDIT REP</h5>
  <form id="myForm"  action=" " method="POST">
  <div class="form-group">
  <label for="exampleInputText1">REP NAME</label>
  <input type="hidden" class="form-control" name="rep_id" value="<?php echo $rep_id ?>">
  <input type="text" class="form-control" name="rep_name" value="<?php echo $rep_name ?>" >
  <label for="exampleInputEmail1">PHONE NUMBER</label>
  <input type="number" class="form-control" name="rep_phone_number" value="<?php echo $rep_phone_number ?>">
  <label for="exampleInputText1">BRANCH</label>
  <input type="text" class="form-control" name="rep_branch" value="<?php echo $rep_branch ?>" >
  <label for="exampleInputEmail1">EMAIL ADDRESS</label>
  <input type="email" class="form-control" name="rep_email" value="<?php echo $rep_email ?>">
  <label for="exampleInputText1">PayRoll Code</label>
  <input type="text" class="form-control" name="rep_payroll_code" value="<?php echo $rep_payroll_code ?>">
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