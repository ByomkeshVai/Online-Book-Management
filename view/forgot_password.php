<!DOCTYPE html>
<html lang="en">
<head>
<title>Forgot Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" />
    <meta http-equiv="Cache-control" content="no-cache">
        <script src="../script.js"></script>
    
</head>
<body>
    <h2>Forgot Password</h2>
    <form action="index.php?action=forgot_password" method="post" onsubmit="return validateForgotPassword()">
        <label for="email">Enter your email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <span id="email_error" style="color: red;"></span>
        <input type="submit" value="Submit">
    </form>
</body>
</html>