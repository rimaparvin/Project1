<?php

// database
const servername = "localhost";
const username = "root";
const password = "Rima1234";
const dbname = "project1";
// Create connection
$conn = new mysqli(servername, username, password, dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}