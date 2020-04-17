<?php

$servername  = 'us-cdbr-iron-east-04.cleardb.net';
$username = 'b1b46812a8f310';
$password = '226540aa';
$dbname = "heroku_184a789d3d8c2d7";

$connect  = mysqli_connect($servername,$username,$password,$dbname);

if ($connect) {
    echo "Sucessfull connection";
} else {
    echo "System is not connected to database";
}


?>
