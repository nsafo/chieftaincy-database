<?php
// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'my_blog';

// Create a database connection
$conn = mysqli_connect($localhost, $root, $, $miniproject);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
