<?php 
//error_reporting(0); 
require '../processors/sessionLogger.php' ;

require '../dbConfig.php' ;

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
        $rep_bank = $n['rep_bank'];
        $rep_account_number = $n['rep_account_number'];
        $rep_tin_number = $n['rep_tin_number'];
        $rep_nssf_number = $n['rep_nssf_number'];
        $rep_nin = $n['rep_nin'];
        $rep_doa = $n['rep_doa'];
        $added_by = $n['added_by'];
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
        $rep_bank = $_POST['rep_bank'];
        $rep_account_number = $_POST['rep_account_number'];
        $rep_tin_number = $_POST['rep_tin_number'];
        $rep_nssf_number = $_POST['rep_nssf_number'];
        $rep_nin = $_POST['rep_nin'];
        $rep_doa = $_POST['rep_doa'];
        $added_by = $_POST['added_by'];

        if ($added_by == $_SESSION["username"]){
            mysqli_query($connect, "UPDATE rep_data SET rep_name = '$rep_name' , rep_phone_number = '$rep_phone_number', rep_branch = '$rep_branch', rep_email = '$rep_email', rep_payroll_code = '$rep_payroll_code',rep_bank = '$rep_bank',rep_account_number = '$rep_account_number',rep_tin_number = '$rep_tin_number',rep_nssf_number = '$rep_nssf_number',rep_nin = '$rep_nin',rep_doa = '$rep_doa',added_by = '$added_by' WHERE rep_id = $rep_id ");
    
        $_SESSION['message'] = "Rep Updated";
    
        header("Location:../reps.php");
        }else{
            echo "Username not matching";
        }
        
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
    <link rel="stylesheet" href="../css/edit-info.css">
    
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
  <input type="text" class="form-control" name="rep_name" required  value="<?php echo $rep_name ?>" >
  <label for="exampleInputEmail1">PHONE NUMBER</label>
  <input type="number" class="form-control" name="rep_phone_number" required  value="<?php echo $rep_phone_number ?>">
  <label for="exampleInputText1">BRANCH</label>
  <input type="text" class="form-control" name="rep_branch" required value="<?php echo $rep_branch ?>" >
  <label for="exampleInputEmail1">EMAIL ADDRESS</label>
  <input type="email" class="form-control" name="rep_email" required  value="<?php echo $rep_email ?>">
  <label for="exampleInputText1">PayRoll Code</label>
  <input type="text" class="form-control" name="rep_payroll_code" required  value="<?php echo $rep_payroll_code ?>">
  <label for="exampleInputText1">Bank</label>
  <input type="text" class="form-control" name="rep_bank" required  value="<?php echo $rep_bank ?>">
  <label for="exampleInputText1">Account number</label>
  <input type="text" class="form-control" name="rep_account_number" required  value="<?php echo $rep_account_number ?>">
  <label for="exampleInputText1">TIN</label>
  <input type="text" class="form-control" name="rep_tin_number" required  value="<?php echo $rep_tin_number ?>">
  <label for="exampleInputText1">NSSF</label>
  <input type="text" class="form-control" name="rep_nssf_number" required  value="<?php echo $rep_nssf_number ?>">
  <label for="exampleInputText1">NIN</label>
  <input type="text" class="form-control" name="rep_nin" required  value="<?php echo $rep_nin ?>">
  <label for="exampleInputText1">Date Of Appointment</label>
  <input type="text" class="form-control" name="rep_doa" required  value="<?php echo $rep_doa ?>">
  <label for="exampleInputText1">Confirm Username</label>
  <input type="text" class="form-control" name="added_by" value="<?php echo $added_by ?>" required>
  </div>
  <button type="submit" class="btn btn-primary" name="update" >Submit Change</button>
  </form>
  <a href="../reps.php"><button  class="btn btn-primary">BACK</button></a>
  </div>
  </div>
  </div>
  </div>
  </body>
</html>