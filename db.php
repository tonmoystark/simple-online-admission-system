<?php
$host = "localhost";
$user = "root";
$password = "Tonmoy123";
$dbname = "admission_system";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
