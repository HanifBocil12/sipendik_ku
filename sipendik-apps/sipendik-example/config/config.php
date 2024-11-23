<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_sipandik');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
