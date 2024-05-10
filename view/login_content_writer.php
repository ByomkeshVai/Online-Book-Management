<!DOCTYPE html>
<html>
<head>
    <title>Content Writer Login</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
   <script type='text/javascript' src='../script.js'></script>
</head>
<body>
    <h2>Login as Content Writer</h2>
    <form method="post" action="index.php?action=login_content_writer" onsubmit="return validateContentWriterLogin()">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <span id="username_error" style="color: red;"></span> <!-- Username error message -->
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <span id="password_error" style="color: red;"></span> <!-- Password error message -->
            </li>
            <li>
                <button type="submit" name="login_content_writer">Login</button>
            </li>
        </ul>
        <?php if (isset($error)) { ?>
            <span style="color: red;"><?php echo $error; ?></span>
        <?php } ?>
    </form>
</body>
</html>
