<header>
    <div>
        <div class="bar">
            <a href='../'><img src="../images/logo.png"></a>
            <div>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<a href="./' . $_SESSION['pages'] . 'search.php">🔎</a>';
                    echo '<a href="./' . $_SESSION['pages'] . 'booking.php">Boeken</a>';
                    echo '<a href="./' . $_SESSION['pages'] . 'dashboard.php">dashboard</a>';
                }
                if (isset($_SESSION['role'])) {
                    if ($_SESSION['role'] > 2) {
                        echo '<a href="./' . $_SESSION['pages'] . 'adminpanel.php">Admin panel</a>';
                    }
                }
                echo '<a href="./' . $_SESSION['pages'] . 'favorites.php"><img src="../images/Star 2.jpg"></a>';
                ?>
                <?php
                echo '<a href="./' . $_SESSION['pages'] . 'shoppingcart.php"><img src="../images/Rectangle24.png"></a>';
                ?>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<a href="' . $_SESSION['pages'] . 'account.php"><img class="account" src="../images/bob.png"></a>';
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
            echo '<a href="./' . $_SESSION['pages'] . 'overig.php">Overig</a>';            ?>
        </div>
    </div>
</header>