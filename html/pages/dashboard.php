<?php
session_start();
$_SESSION['pages'] = "";
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
    <title>DeliAir</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class="container">
        <div class="form">
        <?php
            include 'conn.php';
            $id = $_SESSION['id'];
            $stmt = $connection->prepare("SELECT booking_id, id, country, start_date, end_date FROM bookings WHERE id=:id");
            $stmt->execute(['id' => $id]); 
            $data = $stmt->fetchAll();
            foreach ($data as $row) {
                echo '<div id="' . $row['country'] . '" class="booking-item">';
                echo '<p">' . $row['country'] . '</p>';
                echo '<p>Van ' . $row['start_date'] . ' tot ' . $row['end_date'] . '</p>';
                echo '<a href="booking_delete.php?id=' . $row['booking_id'] . '">cancel</a>';
                echo '</div>';
            }
            ?>
        </div>
        <div>
            <h1>Een recensie schrijven</h1>
            <form name="recensie" action="recensie_logic.php" method="post">
                <div>
                    <label for="country">Land:</label>
                    <input type="text" id="country" name="country" placeholder="Nederland" required>
                </div>
                <div>
                    <input type="text" id="recensie" name="recensie" srequired>
                </div>
                <input type="submit" value="Versturen">
            </form>
        </div>
        <a href="random.php">r</a>
    </div>
</body>

</html>