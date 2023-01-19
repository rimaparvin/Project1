<?php
session_start();
//$_SESSION['login'] = false;

session_unset();

header('location:./login.php');
