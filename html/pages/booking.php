<?php
include 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body id="booking">
    <?php
    if (!isset($_SESSION['id'])) {
        die("You need to login first.");
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_SESSION['id'];
        $country = $_POST['country'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];

        $stmt = $connection->prepare("INSERT INTO bookings (id, country, start_date, end_date) VALUES (?, ?, ?, ?)");
        $stmt->execute([$id, $country, $start_date, $end_date]);

        echo "Trip succesvol geboekt!";
    }
    ?>
    <a class="backbooking" onclick="history.back()">← Back<a>
    <div class="universalblok1" id="bookingblok">
        <form method="POST" action="booking.php">
            Land: <input type="text" name="country"><br>
            Start Date: <input type="date" name="start_date"><br>
            End Date: <input type="date" name="end_date"><br>
            <input type="submit" value="Book Trip">
        </form>
    </div>
</body>
</htm<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>
<body>

<?php
    include 'header.php';
?>

<?php 

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $connection->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
?>
</body>
</html>