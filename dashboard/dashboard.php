<!DOCTYPE html>
<html>
  <head>
    <title>Pcl Reps Live Search</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <link rel="stylesheet" href="../css/login.css">
    
  </head>
  <body>
 <div class="container">
    
      <div class="card card-margin" style="width: 40rem;">
        <div class="card-body">
        <h5 class="card-title">CREATE A USER</h5>
            <form action="createUser.php" method="POST">
            <div class="form-group">
                <label for="exampleInputText1">Staff Name</label>
                <input type="text" class="form-control" id="exampleInputText1" name="staff_name" placeholder="Enter Staff name" required>
              </div>
              <div class="form-group">
                <label for="exampleInputText1">User Name</label>
                <input type="text" class="form-control" id="exampleInputText1" name="staff_username" placeholder="Enter user name" required>
              </div>
              <div class="form-group">
                <label for="exampleInputText1">Staff Role</label>
                <input type="text" class="form-control" id="exampleInputText1" name="staff_role" placeholder="admin OR guest" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="staff_password" placeholder="Enter password" required>
              </div>
              <button type="submit" class="btn btn-primary" name="submit">CREATE USER</button>
            </form>
            </br>
            <a href="users.php"><button type="submit" class="btn btn-primary" name="submit">VIEW USERS</button></a>
        </div>
        </div>
 </div>
  </body>
</html>

