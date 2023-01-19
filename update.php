<?php
include './database.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department=$_POST['department'];
$user_password = $_POST['password'];
$id = $_GET['q'];

$query = "UPDATE STUDENT SET name= '$name', email='$email', phone='$phone', user_password='$user_password',department='$department' WHERE id='$id' ";

$q = $conn->query($query);

if ($q === true) {
    header('location: ./users.php');
} else {
    echo "Error";
}