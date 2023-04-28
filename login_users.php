<?php
session_start();

// check if the user is logged in
if (!isset($_SESSION['username'])) {
  header('location: profile.php');
}

// display the home page
echo "Welcome, ".$_SESSION['username']."!";
?>
