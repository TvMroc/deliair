<?php 
session_start();
include 'conn.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
if (empty($_POST["password"]) || empty($_POST["newpassword"])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];
$newpassword = $_POST["newpassword"];
$password = $_POST["password"];

$stmt = $connection->prepare("UPDATE users SET password=:newpass WHERE id=:passid AND password=:pass");
$result = $stmt->execute(['newpass' => $newpassword, 'passid' => $id, 'pass' => $password]);
$users = $stmt->fetch();

header("Location: account.php");
?>