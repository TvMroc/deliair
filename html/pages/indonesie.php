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

<body>
    <?php
    include 'header.php';
    ?>
    <div class="landendoos1">
        <div class="landenblok1">
            <div class="landenblokin1">
                <a class="landentekst1">Over Indonesie:</a>
                <a class="landentekst2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin volutpat libero, eget ultricies augue dignissim id. In vitae pretium risus. Phasellus pulvinar lacus sodales libero rhoncus, imperdiet mollis nulla pellentesque.</a>
            </div>
            <div class="landenblokin2">
                <img src="../images/indonesia.jpg" class="countryimg">
            </div>
        </div>
    </div>
</body>

</html>