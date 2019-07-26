<?php
session_start();
include 'php/settings.php';
$_SESSION['test'] = "Hello World";
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
echo "<h3>Feel free to overwrite this file. A copy can be found at <a href=\"/php/status.php\">php/status.php</a></h3>";
