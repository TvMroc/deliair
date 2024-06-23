<?php
session_start();
include 'conn.php';

if (isset($_SESSION['role'])) {
    if (!$_SESSION['role'] > 2 ) {
        header("Location: login.php");
    }
}

$id = $_POST["id"];

$sql = "DELETE FROM users WHERE id=:passid";
$stmt = $connection->prepare($sql);
$stmt->execute(['passid' => $id]);

header("Location: adminpanel.php");
exit();
?>