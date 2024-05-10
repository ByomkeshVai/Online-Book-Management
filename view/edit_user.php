<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="../style.css" />
    <meta http-equiv="Cache-control" content="no-cache">
        <script src="../script.js"></script>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" action="index.php?action=updateUser" onsubmit="return validateUserEdit()">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" readonly>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>">
            <span id="email_error" style="color: red;"></span>
        </div>
        <div>
            <label for="role">Role:</label>
            <select id="role" name="role">
                <option value="admin" <?php echo ($user['role'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                <option value="content_writer" <?php echo ($user['role'] == 'content_writer') ? 'selected' : ''; ?>>Content Writer</option>
                <option value="user" <?php echo ($user['role'] == 'user') ? 'selected' : ''; ?>>User</option>
                <option value="delivery_man" <?php echo ($user['role'] == 'delivery_man') ? 'selected' : ''; ?>>Delivery Man</option>
            </select>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>