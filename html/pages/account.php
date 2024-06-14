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
    <link rel="stylesheet" href="/css/main.css">
    <title>Acccount</title>
</head>
<body>
    <a class="back" onclick="history.back()">← Back<a>
    <div class="container">
        <div class="form">
            <h1>Change Username</h1>
            <form name="username" action="username_logic.php" method="post">
                <div>
                    <label for="username">New Username:</label>
                    <input type="text" id="username" name="username" placeholder="John" required>
                </div>
                <div>
                    <label for="userpassword">Password:</label>
                    <input type="password" id="userpassword" name="userpassword" placeholder="!12345689_" required>
                </div>
                <input type="submit" value="Change">
            </form>


            <h1>Change Email</h1>
            <form name="email" action="email_logic.php" method="post">
                <div>
                    <label for="email">New Email:</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com" required>
                </div>
                <div>
                    <label for="mailpassword">Password:</label>
                    <input type="password" id="mailpassword" name="mailpassword" placeholder="!12345689_" required>
                </div>
                <input type="submit" value="Change">
            </form>


            <h1>Change Password</h1>
            <form name="password" action="password_logic.php" method="post">
                <div>
                    <label for="newpassword">New Password:</label>
                    <input type="password" id="newpassword" name="newpassword" placeholder="!12345689_" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="!12345689_" required>
                </div>
                <input type="submit" value="Change">
            </form>
            

            <h1>Delete Account</h1>
            <form name="delete" action="delete_logic.php" method="post">
                <div>
                    <label for="delpassword">Password:</label>
                    <input type="password" id="delpassword" name="delpassword" placeholder="!12345689_" required>
                </div>
                <input type="submit" value="Delete">
            </form>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>

</html>