<!DOCTYPE html>
<html>
<head>
    <title>Sales History</title>
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="stylesheet" href="../style.css" />
</head>
<body>
    <h2>Sales History</h2>
    
    <?php if (!empty($salesHistory)): ?>
        <table border="1">
            <tr>
                <th>Book Name</th>
                <th>Sales Price</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
            <?php foreach ($salesHistory as $sale): ?>
                <tr>
                    <td><?php echo $sale['book_name']; ?></td>
                    <td><?php echo $sale['sales_price']; ?></td>
                    <td><?php echo $sale['status']; ?></td>
                    <td><?php echo $sale['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No sales history found.</p>
    <?php endif; ?>

    <a href="index.php">Back to Home</a>
</body>
</html>
