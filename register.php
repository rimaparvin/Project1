<?php
include './database.php';

$s_id=$_POST['s_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$department=$_POST['department'];
$user_password=$_POST['password'];



$query="INSERT INTO student(s_id,name,email,phone,department,user_password) values('$s_id','$name','$email','$phone','$department','$user_password')";

$q = $conn->query($query);

if ($q === true) {
    header('location: ./users.php');
} else {
    echo "Error";
}

?>


