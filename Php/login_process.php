<?php
session_start();
require_once 'config.php';
require_once 'functions.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        echo "Login successful!";
        if ($user['is_admin']) {
            header("Location: admin.php");
        } else {
            header("Location: home.html");
        }
        exit(); 
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "User not found.";
}
$stmt->close();
$conn->close();
?>
