<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>
</head>
<body>
    <h2>Manage Bookings</h2>
    
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
        </tr>

        <?php foreach ($bookings as $booking): ?>
            <tr>
                <td><?php echo $booking["name"]; ?></td>
                <td><?php echo $booking["email"]; ?></td>
                <td><?php echo $booking["checkin"]; ?></td>
                <td><?php echo $booking["checkout"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
    <a href="index.php">Back to Homepage</a>
</body>
</html>