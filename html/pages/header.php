<header>
    <div>
        <div class="bar">
            <a href='../'><img src="../images/logo.png"></a>
            <div>
                <?php
                echo '<a href="./' . $_SESSION['pages'] . 'favorites.php"><img src="../images/Star 2.jpg"></a>';
                ?>
                <img src="../images/Rectangle24.png">
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<img class="account" src="../images/bob.png">';
                } else {
                    echo '<a href="' . $_SESSION['pages'] . 'login.php"><img class="account" src="../images/account.png"></a>';
                }
                ?>
            </div>
        </div>
    </div>
    <div>
        <div class="bar">
            <?php
            echo '<a href="./' . $_SESSION['pages'] . 'zomervakantie.php">Zomervakantie</a>';
            echo '<a href="./' . $_SESSION['pages'] . 'lastminute.php">Last Minute</a>';
            echo '<a href="./' . $_SESSION['pages'] . 'verrereizen.php">Verre Reizen</a>';
            echo '<a href="./' . $_SESSION['pages'] . 'vliegtickets.php">Vliegtickets</a>';
            echo '<a href="./' . $_SESSION['pages'] . 'stedetrips.php">Stedetrips</a>';
            echo '<a href="./' . $_SESSION['pages'] . 'overig.php">Overig</a>';
            ?>
        </div>
    </div>
</header>