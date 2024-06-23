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
        <div class="adminforms">
            <form name="booking_modify" action="booking_modify_logic.php" method="post">
                <h1>Reizen aanpassen</h1>
                <div>
                    <label for="bookingid">Booking id:</label>
                    <input type="text" id="bookingid" name="bookingid" placeholder="1" required>
                </div>
                <div>
                    <label for="userid">User id:</label>
                    <input type="text" id="userid" name="userid" placeholder="1" required>
                </div>
                <div>
                    <label for="land">Land:</label>
                    <input type="text" id="land" name="land" placeholder="nederland" required>
                </div>
                <div>
                    <label for="startdatum">Start datum:</label>
                    <input type="date" id="startdatum" name="startdatum" placeholder="2024-06-12" required>
                </div>
                <div>
                    <label for="einddatum">Eind datum:</label>
                    <input type="date" id="einddatum" name="einddatum" placeholder="2024-06-30" required>
                </div>
                <input type="submit" value="Aanpassen">
            </form>

            <form name="booking_create" action="booking_create_logic.php" method="post">
                <h1>Reizen aanmaken</h1>
                <div>
                    <label for="bookingid">Booking id:</label>
                    <input type="text" id="bookingid" name="bookingid" placeholder="1" required>
                </div>
                <div>
                    <label for="userid">User id:</label>
                    <input type="text" id="userid" name="userid" placeholder="1" required>
                </div>
                <div>
                    <label for="land">Land:</label>
                    <input type="text" id="land" name="land" placeholder="nederland" required>
                </div>
                <div>
                    <label for="startdatum">Start datum:</label>
                    <input type="date" id="startdatum" name="startdatum" placeholder="2024-06-12" required>
                </div>
                <div>
                    <label for="einddatum">Eind datum:</label>
                    <input type="date" id="einddatum" name="einddatum" placeholder="2024-06-30" required>
                </div>
                <input type="submit" value="Aanmaken">
            </form>
            
            <form name="register" action="register_logic.php" method="post">
                <h1>Account aanmaken</h1>
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="John" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="!12345689_" required>
                </div>
                <input type="submit" value="Aanmaken">
            </form>

            <form name="delete" action="account_delete_logic.php" method="post">
                <h1>Account deleten</h1>
                <div>
                    <label for="id">id:</label>
                    <input type="text" id="id" name="id" placeholder="1" required>
                </div>
                <input type="submit" value="Delete">
            </form>

            <form name="modify" action="account_modify_logic.php" method="post">
                <h1>Account aanpassen</h1>
                <div>
                    <label for="id">id:</label>
                    <input type="text" id="id" name="id" placeholder="1" required>
                </div>
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="John" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="!12345689_" required>
                </div>
                <input type="submit" value="Aanpassen">
            </form>
        </div>
    </div>
    <h1>Gebookte vluchten</h1>
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