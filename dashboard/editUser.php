<?php 
 error_reporting(0); 
$servername  = 'localhost';
$username = 'root';
$password = '';
$dbname = "testhouse";

$connect  = mysqli_connect($servername,$username,$password,$dbname);

if (isset($_GET['edit'])) {
    $staff_id = $_GET['edit'];
    $update = true;

    $record = mysqli_query($connect, "SELECT * FROM users  WHERE staff_id = $staff_id ");

    if (count($record) == 1) {
        //This code populates the input with input data
        $n = mysqli_fetch_array($record);
        $staff_name = $n['staff_name'];
        $staff_username = $n['staff_username'];
        $staff_role= $n['staff_role'];
        $staff_password= $n['staff_password'];
    }
   
}

if (isset($_POST['update'])) {
        $staff_id = $_POST['staff_id'];
        $staff_name = $_POST['staff_name'];
        $staff_username = $_POST['staff_username'];
        $staff_role= $_POST['staff_role'];
        $staff_password= $_POST['staff_password'];
    
        mysqli_query($connect, "UPDATE users SET staff_name = '$staff_name' , staff_username = '$staff_username', staff_role = '$staff_role', staff_password = '$staff_password' WHERE staff_id = $staff_id ");
    
        $_SESSION['message'] = "Staff Login Credentials  Updated";
    
        // header("Location:users.php");

          
    
}

?>
<html>
<head>
    <title>Pcl Reps Live Search</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <link rel="stylesheet" href="../css/edit-user.css">
    
  </head>
  <body>
  <div class = "form-design">
  <div class="container">
  <div class="card card-margin" style="width: 35rem;">
  <div class="card-body">
  <h5 class="card=title">EDIT REP</h5>
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleInputText1">Staff Name</label>
                <input type="hidden" class="form-control" name="staff_id" value="<?php echo $staff_id ?>">
                <input type="text" class="form-control" id="exampleInputText1" name="staff_name" required value="<?php echo $staff_name ?>" >
              </div>
              <div class="form-group">
                <label for="exampleInputText1">User Name</label>
                <input type="text" class="form-control" id="exampleInputText1" name="staff_username" required  value="<?php echo $staff_username ?>" >
              </div>
              <div class="form-group">
                <label for="exampleInputText1">Staff Role</label>
                <input type="text" class="form-control" id="exampleInputText1" name="staff_role" required  value="<?php echo $staff_role ?>" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required  name="staff_password" value="<?php echo $staff_password ?>">
              </div>
              <button type="submit" class="btn btn-primary" name="update">UPDATE USER</button>
            </form>
  <a href="users.php"><button  class="btn btn-primary">BACK</button></a>
  </div>
  </div>
  </div>
  </div>
  </body>
</html>