<?php
require_once 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edit_username = $_POST['edit_username'];
    $new_email = $_POST['new_email'];
    $sql = "UPDATE users SET email = ? WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $new_email, $edit_username);
    if ($stmt->execute()) {
        echo "User email updated successfully.";
    } else {
        echo "Error updating user email: " . $conn->error;
    }
    $stmt->close();
    $conn->close();
}
?>
