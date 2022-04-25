<?php
$servername = "147.182.228.165";
$username = "msundarbanuser";
$password = "kFllEYmZJgzEW2Rn";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>