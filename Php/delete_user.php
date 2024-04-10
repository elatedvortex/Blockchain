<?php
require_once 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $delete_username = $_POST['delete_username'];
    $sql = "DELETE FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $delete_username);
    if ($stmt->execute()) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
    $stmt->close();
    $conn->close();
}?>
