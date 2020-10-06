<?php
$servername = "localhost";
$username = "c0sezginvtka";
$password = "Y7ckrtd0vfd..";

// Create connection
$conn = new mysqli($servername, $username, $password, 'c0arabalars');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
