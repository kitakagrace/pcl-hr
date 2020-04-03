<?php

$servername  = 'localhost';
$username = 'root';
$password = '';
$dbname = "testhouse";

$connect  = mysqli_connect($servername,$username,$password,$dbname);

if ($connect) {
  //  echo "Sucessfull connection";
} else {
    echo "System is not connected to database";
}


?>