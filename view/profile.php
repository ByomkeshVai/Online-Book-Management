<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="stylesheet" href="../style.css" />
</head>
<body>
    <h2>Welcome, <?php echo $user['username']; ?>!</h2>

     <h3> Dashboard</h3>

    
    <table border="1">
        <tr>
            <th>Total Books</th>
            <th>Total Content Writers</th>
            <th>Total Delivery Men</th>
            <th>Sales</th>
        </tr>
        <tr>
            <td><?php echo getTotalBooks(); ?></td>
            <td><?php echo getTotalContentWriters(); ?></td>
            <td><?php echo getTotalDeliveryMen(); ?></td>
            <td><?php echo getTotalSales(); ?></td>
        </tr>
    </table>

    <h3>Profile Information</h3>
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            
            <th>Action</th>
            
        </tr>
        <?php if ($isAdmin): ?>
            <?php foreach ($allUsers as $user): ?>
            <tr>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['role']; ?></td>
                <td>
                    <a href="index.php?action=editUser&username=<?php echo $user['username']; ?>">Edit</a>
                    <a href="index.php?action=deleteUser&username=<?php echo $user['username']; ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <?php if ($user['role'] !== 'admin'): ?>
            <tr>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['role']; ?></td>
                <td>
                    <a href="index.php?action=editUser&username=<?php echo $user['username']; ?>">Edit</a>
                    <a href="index.php?action=changepassword">Change Password</a>
                </td>
            </tr>
            <?php endif; ?>
        <?php endif; ?>
    </table>


   
    <?php if ($isAdmin): ?>
        <br>
        <a href="index.php?action=changepassword">Change Password</a>
        <a href="index.php?action=manage_delivery_man">Manage Delivery Man</a>
         <a href="index.php?action=manage_books">Manage Books</a>
         <a href="index.php?action=manage_content_writers">Manage Content Writer</a>
         <a href="index.php?action=sales_history">Sales History</a>

    <?php endif; ?>
    <a href="index.php?action=logout">Logout</a>
</body>
</html>