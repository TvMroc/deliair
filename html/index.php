<?php
session_start();
$_SESSION['pages'] = "pages/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>DeliAir</title>
    <script src="./js/selector.jsx"></script>
</head>
<body id="bodyindex">
    <?php
    include 'pages/header.php';
    ?>

    <header id="homepage-header">

    </header>
    <div class="indexdoos1" id='homepage-header'>
        <div class="indexblok1">
            <div class="indexbalk1">
                <div onclick="selection('hideindexbalkbutton', 'indexbalkbutton1')" class="indexbalkbutton"><a class="indexbuttontekst1">Countries</a></div>
                <div onclick="selection('hideindexbalkbutton', 'indexbalkbutton2')" class="indexbalkbutton"><a class="indexbuttontekst1">-</a></div>
                <div onclick="selection('hideindexbalkbutton', 'indexbalkbutton3')" class="indexbalkbutton"><a class="indexbuttontekst1">-</a></div>
                <div onclick="selection('hideindexbalkbutton', 'indexbalkbutton4')" class="indexbalkbutton"><a class="indexbuttontekst1">-</a></div>
                <div onclick="selection('hideindexbalkbutton', 'indexbalkbutton5')" class="indexbalkbutton"><a class="indexbuttontekst1">Info</a></div>
            </div>
            <div class="indexblok2">
                <div class="indexbalkbutton1 hideindexbalkbutton">13456789</div>
                <div class="indexbalkbutton2 hideindexbalkbutton">234567</div>
                <div class="indexbalkbutton3 hideindexbalkbutton">33456</div>
                <div class="indexbalkbutton4 hideindexbalkbutton">423456</div>
                <div class="indexbalkbutton5 hideindexbalkbutton">51234</div>
            </div>
        </div>
    </div>
</body>
</html>