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
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <a class="back" href="../index.php">← Home<a>
    <div class="searchblok">
        <h1 class="searchbloktekstheader">Flight locations</h1>
        <input class="searchbar" type="text" placeholder="Search the location of your desire" id="search" onkeyup="bookSearch('locations-item')"><br>
        <?php
            include 'conn.php';

            $sql = 'SELECT id, name, description FROM locations';
            $stmt = $connection->query($sql);

            while ($row = $stmt->fetch()) {
                echo '<div id="bookingcountry' . $row['name'] . '" class="locations-item">';
                echo '<p">' . $row['name'] . '</p>';
                echo '<p">' . $row['id'] . '</p>';
                echo '<a href="booking.php?id='  . '">Book the trip</a>';
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>