<?php
include './database.php';
$id = $_GET['q'];



$query = "DELETE FROM STUDENT WHERE id= '$id' ";

$q = $conn->query($query);

if ($q === true) {
    header('location: ./users.php');
} else {
    echo "Error";
}