<!DOCTYPE html>
<html>
  <head>
    <title>Pcl Reps Live Search</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <link rel="stylesheet" href="css/login.css">
    
  </head>
  <body>
 <div class="container">
    
      <div class="card card-margin" style="width: 35rem;">
        <div class="card-body">
        <h5 class="card-title">CREATE A USER</h5>
            <form action="processors/createUser.php" method="POST">
              <div class="form-group">
                <label for="exampleInputText1">Username</label>
                <input type="text" class="form-control" id="exampleInputText1" name="staff_name" placeholder="Enter user name" >
              </div>
              <div class="form-group">
                <label for="exampleInputText1">Staff Role</label>
                <input type="text" class="form-control" id="exampleInputText1" name="staff_role" placeholder="admin OR guest" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="staff_password" placeholder="Enter password">
              </div>
              <button type="submit" class="btn btn-primary" name="submit">CREATE USER</button>
            </form>
        </div>
        </div>
 </div>
  </body>
</html>

