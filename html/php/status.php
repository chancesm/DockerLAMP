<?php
session_start();
include 'settings.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
  echo "Database Connection Success";
}
echo "<hr></hr>";
echo "SESSION VARIABLES <br>";
var_dump($_SESSION);
echo "<hr></hr>";
