<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
</head>
<body>
    <h1>User Management</h1>
    <h2>Edit User</h2>
    <form action="edit_user.php" method="post">
        <label for="edit_username">Username:</label>
        <input type="text" id="edit_username" name="edit_username" required><br>
        <label for="new_email">New Email:</label>
        <input type="email" id="new_email" name="new_email" required><br>
        <input type="submit" value="Edit User">
    </form>
    <h2>Delete User</h2>
    <form action="delete_user.php" method="post">
        <label for="delete_username">Username:</label>
        <input type="text" id="delete_username" name="delete_username" required><br>
        <input type="submit" value="Delete User">
    </form>
</body>
</html>
