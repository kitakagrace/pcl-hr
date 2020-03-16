<?php

$servername  = 'localhost';
$username = 'root';
$password = '';
$dbname = "testhouse";

$connect  = mysqli_connect($servername,$username,$password,$dbname);

if($connect){
    echo 'success conect';
}else{
    echo 'failed conect';
}


if(isset($_POST['submit'])){
    $title = $_POST['webslesson_post_title'];
    $query = "INSERT INTO tbl_webslesson_post (webslesson_post_title) VALUES ('$title')";

    if (mysqli_query( $connect, $query )) {
        echo "New record created";
    } else {
        echo "Failed to create record";
    }
    mysqli_close($connect);
}
?>