<?php
// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "priya";

$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
