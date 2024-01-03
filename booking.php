<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Room</title>
</head>
<body>
    <h2>Book a Room Now</h2>
    
    <form action="processBooking.php" method="post">
        <label for="name">Your first name:</label>
        <input type="text" name="name" required><br>

        <label for="name">Your last name:</label>
        <input type="text" name="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="checkin">Check-in Date:</label>
        <input type="date" name="checkin" required><br>
        
        <label for="checkout">Check-out Date:</label>
        <input type="date" name="checkout" required><br>
        
        <input type="submit" value="Book Now">
    </form>
</body>
</html>