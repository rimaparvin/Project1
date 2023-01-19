<?php
session_start();
include './database.php';

$email = $_POST['email'];
$user_password = $_POST['password'];

$query = "SELECT * FROM STUDENT WHERE email= '$email' AND user_password='$user_password' ";

$q = $conn->query($query);

$student = $q->fetch_assoc();

if ($q->num_rows == 1) {
    $_SESSION['login'] = true;
    $_SESSION['name'] = $student['name'];
    header('location:./users.php');
} else {
    echo 'Email and password didn\'t match';
}
