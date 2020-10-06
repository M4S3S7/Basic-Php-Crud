<?php
$servername = "localhost";
$username = "c0arabalars";
$password = "Y7ckrtd0vfd..";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
