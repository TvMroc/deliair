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
    <script src="../js/search.js"></script>
    <script src="../js/search copy.js"></script>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <a class="back" href="../index.php">← Home</a>
    <div class="searchblok1">
        <h1 class="searchbloktekstheader1">Flight locations</h1>

        <input class="searchbar1" type="text" placeholder="Search the location of your desire" id="search" onkeyup="bookSearch('locations-item')"><br>
        <?php
            include 'conn.php';

            $sql = 'SELECT id, name FROM locations';
            $stmt = $connection->query($sql);

            while ($row = $stmt->fetch()) {
                echo '<div id="bookingcountry' . $row['name'] . '" class="locations-item">';
                echo '<p">' . $row['name'] . '</p>';
                echo '<p">' . $row['id'] . '</p>';
                echo '<a href="booking.php?id='  . '">Book the trip</a>';
                echo '</div>';
            }
        ?>
    <div class="searchblok2">
        <h1 class="searchbloktekstheader2">Hotels</h1>
        <input class="searchbar2" type="text" placeholder="Search the hotel of your desire" id="zoek" onkeyup="bookSearch('hotel-item')"><br>
        <?php

            $num2 = 'SELECT id, name FROM hotel';
            $stmt = $connection->query($num2);

            while ($row = $stmt->fetch()) {
                echo '<div id="bookingcountry' . $row['name'] . '" class="hotel-item">';
                echo '<p">' . $row['name'] . '</p>';
                echo '<p">' . $row['id'] . '</p>';
                echo '<a href="booking.php?id='  . '">Book the hotel</a>';
                echo '</div>';
            }
        ?>
    </div>
</div>
</body>
</html>