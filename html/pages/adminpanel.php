<?php 
session_start();
$_SESSION['pages'] = "";

if (isset($_SESSION['role'])) {
    if (!$_SESSION['role'] > 2 ) {
        header("Location: login.php");
    }
}
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>DeliAir Admin</title>
    <script src="../js/search.js"></script>
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <div>
        <h1>yes</h1>
    </div>
    
    <input class="search" type="text" placeholder="search" id="search" onkeyup="bookSearch('booking-item')"><br>

    <?php
        include 'conn.php';

        $sql = 'SELECT booking_id, id, country, start_date, end_date FROM bookings';
        $stmt = $connection->query($sql);

        while ($row = $stmt->fetch()) {
            echo '<div id="' . $row['country'] . '" class="booking-item">';
            echo '<p">' . $row['country'] . '</p>';
            echo '<p>' . $row['start_date'] . '</p><p>' . $row['end_date'] . '</p>';
            echo '<p>' . $row['id'] . '</p><p>' . $row['booking_id'] . '</p>';
            echo '<a href="booking_delete.php?id=' . $row['booking_id'] . '">cancel</a>';
            echo '</div>';
        }
        ?>
</body>
</html>