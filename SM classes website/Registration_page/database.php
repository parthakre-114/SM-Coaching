<?php


$server = "localhost";
 $database = "response";
 $username = "root";
 $pass = "";


 $conn = new mysqli($server,$username,$pass,$database);

 if ($conn->connect_error ) {
 	die("connection failed : ". $conn->connect_error );

 }else{
 	echo "success";
 }


  ?>