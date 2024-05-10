<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>3
    <link rel="stylesheet" href="../style.css" />
    <meta http-equiv="Cache-control" content="no-cache">
    <script src="../script.js"></script>
</head>
<body>
    <h2>Change Password</h2>
    <form method="post" action="index.php?action=changePassword" onsubmit="return validatePassword()">
        <div>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>
        </div>
        <div>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <span id="password_error" style="color: red;"></span> 
        </div>
        <div>
            <button type="submit">Change Password</button>
        </div>
        <?php if (isset($error)) { ?>
            <div style="color: red;"><?php echo $error; ?></div>
        <?php } ?>
    </form>
</body>
</html>