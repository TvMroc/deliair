<header>
    <div>
        <div class="bar">
            <img src="../images/logo.png">
            <div>
                <img src="../images/Rectangle24.png">
                <?php
                    if (isset($_SESSION['user'])) {
                        echo '<img class="account" src="../images/bob.png">';
                    } else {
                        echo '<a href="pages/login.php"><img class="account" src="../images/midway.png"></a>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div>
        <div class="bar">
            <a href='./pages/zomervakantie.php'>Zomervakantie</a>
            <a href="">Last Minute</a>
            <a href="">Verre Reizen</a>
            <a href="">Vliegtickets</a>
            <a href="">Stedetrips</a>
            <a href="">Overig</a>
        </div>
    </div>
</header>