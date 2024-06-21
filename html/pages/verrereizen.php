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
    <title>DeliAir</title>
    <script src="../js/selector.jsx"></script>
</head>

<body id="bodyindex">
    <?php
    include 'header.php';
    ?>
    <div class="indexdoos1">
        <div class="verrereis">
            <div class="verrereizenblokje1">
                <a class="tekstvoorverreizen">Dit zijn de landen waar wij je naar uit kunnen vliegen.</a>
            </div>
            <div class="verrereizenblokje2">
                <a class="landenlol">Finland, Sweden, Denenmarken, Indonesie, Afrika, Spanje, Italie, Groot-Brittanie, Ierland, Schotland, Wales, Ijsland, Dubai, Turkije, UAE, Saudi Arabie, Qatar, Singapore, Kenia, Japan. </a>
                <?php
                    include 'conn.php';

                    $sql = 'SELECT name, id, description FROM locations';
                    $stmt = $connection->query($sql);

                    while ($row = $stmt->fetch()) {
                        echo '<div id="' . $row['name'] . '" onclick="selection(\'land\', \'land' . $row['id'] . '\')">';
                        echo '<p>' . $row['name'] . '</p>';
                        echo '</div>';
                    }
                ?>
            </div>
            <?php
                    include 'conn.php';

                    $sql = 'SELECT name, id, description FROM locations';
                    $stmt = $connection->query($sql);

                    while ($row = $stmt->fetch()) {
                        echo '<p class="land" id="land' . $row['id'] . '">' . $row['description'] . '</p>';
                    }
                ?>
        </div>
    </div>
</body>

</html>