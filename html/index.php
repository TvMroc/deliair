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
                <div onclick="selection('hideindexbalkbutton', 'indexbalkbutton1')" class="indexbalkbutton"><a
                        class="indexbuttontekst1">Landen</a></div>
                <div onclick="selection('hideindexbalkbutton', 'indexbalkbutton2')" class="indexbalkbutton"><a
                        class="indexbuttontekst1">-</a></div>
                <div onclick="selection('hideindexbalkbutton', 'indexbalkbutton3')" class="indexbalkbutton"><a
                        class="indexbuttontekst1">-</a></div>
                <div onclick="selection('hideindexbalkbutton', 'indexbalkbutton4')" class="indexbalkbutton"><a
                        class="indexbuttontekst1">-</a></div>
                <div onclick="selection('hideindexbalkbutton', 'indexbalkbutton5')" class="indexbalkbutton"><a
                        class="indexbuttontekst1">Info</a></div>
            </div>
            <div class="indexblok2">
                <div class="indexbalkbutton1 hideindexbalkbutton">
                    <div class="indexbloktekst"><a class="indextekst2"><a class="indextekst2">Onze uitgelichte
                                Landen:</a><a class="indextekst3" href="pages/denenmarken.php">Denenmarken</a><a
                                class="indextekst3" href="pages/finland.php">Finland</a><a class="indextekst3"
                                href="pages/indonesie.php">Indonesie</a></div>
                </div>
                <div class="indexbalkbutton2 hideindexbalkbutton">
                    <div class="indexbloktekst"><a class="indextekst2">-</a></div>
                </div>
                <div class="indexbalkbutton3 hideindexbalkbutton">
                    <div class="indexbloktekst"><a class="indextekst2">-</a></div>
                </div>
                <div class="indexbalkbutton4 hideindexbalkbutton">
                    <div class="indexbloktekst"><a class="indextekst2">-</a></div>
                </div>
                <div class="indexbalkbutton5 hideindexbalkbutton">
                    <div class="indexbloktekst"><a class="indextekst2">3 dingen die je moet weten over ons
                            boekingbureau.</a>
                        <a class="indextekst2">Minderjarige moeten minstens een ouder/voogd meenemen op vluchten.</a>
                        <a class="indextekst2">Een all-inclusive moet tenminste 3 weken van tevoren geannuleert
                            worden.</a>
                        <a class="indextekst2">Je moet minstens 30 minuten van te voren inchecken bij de vliegveld</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>