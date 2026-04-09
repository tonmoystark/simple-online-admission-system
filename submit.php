<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

$sql = "INSERT INTO applications (name, email, phone, course)
        VALUES ('$name', '$email', '$phone', '$course')";

if ($conn->query($sql) === TRUE) {
    echo "Application Submitted Successfully! <a href='index.php'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}
