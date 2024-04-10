<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include_once "config.php";#db
$username = $_SESSION['username'];
$sql = "SELECT email FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $current_email = $row['email'];
} else {
    $current_email = "Email not found";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_email = $_POST["new_email"];
    $update_sql = "UPDATE users SET email = '$new_email' WHERE username = '$username'";
    if (mysqli_query($conn, $update_sql)) {
        $success_message = "Email address updated successfully.";
        $current_email = $new_email; 
    } else {
        $error_message = "Error updating email address: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <div class="container">
        <h2>Edit Profile</h2>
        <?php if (isset($success_message)) : ?>
            <div class="success-message"><?php echo $success_message; ?></div>
        <?php endif; ?>
        <?php if (isset($error_message)) : ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="new_email">New Email Address:</label><br>
            <input type="email" id="new_email" name="new_email" value="<?php echo $current_email; ?>"><br>
            <input type="submit" value="Update Email Address">
        </form>
        <br>
        <a href="dashboard.php">Back to Dashboard</a>
        <br><br>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
