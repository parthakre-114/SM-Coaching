<?php
include'database.php';

$name = $_POST['fname'];
$gen = $_POST['gender'];
$class = $_POST['Class'];
$sub1= $_POST['subject1'];
$sub2= $_POST['subject2'];
$sub3= $_POST['subject3'];
$dob = $_POST['Date'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$country = $_POST['country'];


// echo $name;
// echo $country;

$insert = "INSERT INTO info(name,gender,class,sub1,sub2,sub3,dob,contact,email,country)VALUES('$name','$gen','$class','$sub1','$sub2','$sub3','$dob','$phone','$email','$country')";
$up = mysqli_query($conn,$insert);

header('location:../page.php');
 ?>
