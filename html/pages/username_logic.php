<?php 
session_start();
include 'conn.php';

if (empty($_POST["username"]) || empty($_POST["userpassword"])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];
$newusername = $_POST["username"];
$password = $_POST["userpassword"];


$stmt = $connection->prepare("UPDATE users SET username=:newuser WHERE id=:mailid AND password=:pass");
$result = $stmt->execute(['newuser' => $newusername, 'mailid' => $id, 'pass' => $password]);
$users = $stmt->fetch();

$_SESSION['user'] = $newusername;
header("Location: account.php");
?>
