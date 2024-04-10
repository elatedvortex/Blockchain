<?php
session_start();
require_once 'config.php';

$new_email = $_POST['new_email'];
$username = $_SESSION['username'];

$stmt = $conn->prepare("UPDATE users SET email = ? WHERE username = ?");
$stmt->bind_param("ss", $new_email, $username);
if ($stmt->execute()) {
    echo "Email updated successfully!";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
