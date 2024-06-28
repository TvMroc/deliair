<?php
session_start();
$_SESSION['pages'] = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>DeliAir Search</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class="searchblok">
        <div class>
        <h1 class="searchbloktekstheader">Geboekte vluchten</h1>
        <input class="search" type="text" placeholder="search" id="search" onkeyup="bookSearch('booking-item')"><br>
        <?php
            include 'conn.php';

            $sql = 'SELECT booking_id, id, country, start_date, end_date FROM bookings';
            $stmt = $connection->query($sql);

            while ($row = $stmt->fetch()) {
                echo '<div id="' . $row['country'] . '" class="booking-item">';
                echo '<p">' . $row['country'] . '</p>';
                echo '<p>' . $row['start_date'] . '</p><p>' . $row['end_date'] . '</p>';
                echo '</div>';
            }
        ?>
    </div>
</div>
</body>
</html>