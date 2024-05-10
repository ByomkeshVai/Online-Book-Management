<!DOCTYPE html>
<html>
<head>
    <title>Add Content Writer</title>
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="stylesheet" href="../style.css" />
    <script src="../script.js"></script>
</head>
<body>
    <h2>Add Content Writer</h2>
    <form name="addWriterForm" method="post" action="index.php?action=add_content_writer_submit" onsubmit="return validate()">
        <label>Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <span id="error1" style="color: red;"></span><br> 
        <label>Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <span id="error2" style="color: red;"></span><br> 
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <input type="submit" value="Add">
    </form>
    <a href="index.php?action=manage_content_writers">Back to Manage Content Writer</a>
</body>
</html>
