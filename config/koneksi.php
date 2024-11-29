<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_sipandik_exam');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}