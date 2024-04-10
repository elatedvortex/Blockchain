<?php
require_once 'config.php';
require_once 'functions.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = hashPassword($_POST['password']);
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo "Username or email already exists. Please choose a different one.";
} else {
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }
}
$stmt->close();
$conn->close();
?>
