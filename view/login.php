<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../style.css" />
    <meta http-equiv="Cache-control" content="no-cache">
        <script src="../script.js"></script>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="" onsubmit="return validateLoginForm()">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <span id="username_error" style="color: red;"></span> <!-- Error message for username -->
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <span id="password_error" style="color: red;"></span> <!-- Error message for password -->
            </li>
            <li>
                <button type="submit">Login</button>
            </li>
        </ul>
        <div>
            <h3>Login as Content Writer</h3>
            <a href="index.php?action=login_content_writer">Login as Content Writer</a>
            <h3>Don't have an account? <a href="index.php?action=register">Register</a></h3> 
            <h3>Forgot Password <a href="index.php?action=show_password_form">Reset Here</a></h3> 
        </div>
    </form>
    <?php if (isset($error)) { ?>
        <span style="color: red;"><?php echo $error; ?></span>
    <?php } ?>
</body>
</html>
