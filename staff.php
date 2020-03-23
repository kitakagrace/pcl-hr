<!DOCTYPE html>
<html>
  <head>
    <title>Pcl Reps Live Search</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <link rel="stylesheet" href="display.css">
  </head>
  <body>
    <br />
    <?php require "navbar.php" ; ?>
    <div class="container">
      
      <br />
      <div class="card">
        <div class="card-header">Instant Search of Rep Data</div>
        <div class="addBtn">
        <button type="button" class="btn btn-outline-primary "  onClick="revealFunction()" >ADD RECORD</button>
        </div>
        
        <div class="card-body">
          <div class="form-group">
            <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Type Rep's name here" />
          </div>
          <div class="table-responsive" id="dynamic_content">
            
          </div>
        </div>
      </div>

      
      <form id="myForm"  action="processors/addstaff.php" method="POST">
          <div class="cancelBtn">
          <button type="button" class="btn btn-outline-warning" onClick="hideFunction()">CANCEL</button>
          </div>
          <div class="form-group">
            
            <label for="exampleInputText1">STAFF NAME</label>
            <input type="text" class="form-control" name="staff_name" required>
            <label for="exampleInputEmail1">PHONE NUMBER</label>
            <input type="number" class="form-control" name="staff_phone_number" required>
            <label for="exampleInputText1">BRANCH</label>
            <input type="text" class="form-control" name="staff_branch" required >
            <label for="exampleInputText1">DATE OF BIRTH</label>
            <input type="text" class="form-control" name="staff_dob" >
            <label for="exampleInputText1">DATE OF APPOINTMENT</label>
            <input type="text" class="form-control" name="staff_doa" required>
          </div>
          <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
      </form>

    </div>
  </body>
</html>
<script>
// hiding form on page load
  document.getElementById("myForm").style.display = "none";
// hiding form on page load

function revealFunction(){

  document.getElementById("myForm").style.display = "block";
}
function hideFunction(){

document.getElementById("myForm").style.display = "none";
}
  $(document).ready(function(){

    load_data(1);

    function load_data(page, query = '')
    {
      $.ajax({
        url:"fetch_staff.php",
        method:"POST",
        data:{page:page, query:query},
        success:function(data)
        {
          $('#dynamic_content').html(data);
        }
      });
    }

    $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#search_box').val();
      load_data(page, query);
    });

    $('#search_box').keyup(function(){
      var query = $('#search_box').val();
      load_data(1, query);
    });

  });
</script>

