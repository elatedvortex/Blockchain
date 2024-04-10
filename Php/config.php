<?php
$host = "localhost";
$username = "sakar";
$password = "qwe123";
$database = "tasks";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
