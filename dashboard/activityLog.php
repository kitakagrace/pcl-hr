<?php

require '../dbConfig.php';


$rep_activity = mysqli_query($connect, "SELECT * FROM rep_data ORDER by rep_id  DESC");


$staff_activity = mysqli_query($connect, "SELECT * FROM staff_data");

?>

<html>
<head>
<title>Pcl Live Search</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
<link rel="stylesheet" href="../css/activityLog.css">
</head>
<body>
<div class="container">
    <div class="list-center">
    <?php
   while ($row = mysqli_fetch_row($rep_activity)) {
       echo '
       <ul>
       <li><p>'.$row[3]." "."(Rep)" .'Added by'." ".$row[2].'</p></li>
       </ul>

       ';
   }
   while ($row = mysqli_fetch_row($staff_activity)) {
    echo '
    <ul>
    <li><p>'.$row[1]." ". "(Staff) " .'Added by'." ".$row[6].'</p></li>
    </ul>

    ';
}
    ?>
    </div>
 </div>  
</body>
</html>
