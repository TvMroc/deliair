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
                <a class="landenlol">Amerika, Duitsland, Belgie, Finland, Sweden, Denenmarken, Indonesie, Afrika, Spanje, Italie, Groot-Brittanie, Ierland, Schotland, Wales, Ijsland, Dubai, Turkije, UAE, Saudi Arabie, Qatar, Singapore, Kenia, Japan. </a>
            </div>
        </div>
    </div>
</body>

</html>