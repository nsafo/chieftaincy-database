<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'miniproject');

// get the username and password from the form
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

// check if the username and password match a record in the database
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) == 1) {
  // login successful
  $_SESSION['username'] = $username;
  header('location: profile.php');
} else {
  // login failed
  echo "Incorrect username or password.";
}
?>
