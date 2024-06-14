<?php
session_start();
include 'conn.php';

if (empty($_POST["delpassword"])) {
    header("Location: account.php");
    exit();
}

$id = $_SESSION['id'];
$password = $_POST["delpassword"];

$sql = "DELETE FROM users WHERE id=:passid AND password=:pass";
$stmt = $connection->prepare($sql);
$stmt->execute(['passid' => $id, 'pass' => $password]);

header("Location: logout.php");
exit();
?>