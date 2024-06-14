<?php 
session_start();
include 'conn.php';

if (empty($_POST["mailpassword"]) || empty($_POST["email"])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];
$newemail = $_POST["email"];
$password = $_POST["mailpassword"];

$stmt = $connection->prepare("UPDATE users SET email=:mail WHERE id=:userid AND password=:pass");
$result = $stmt->execute(['mail' => $newemail, 'userid' => $id, 'pass' => $password]);
$users = $stmt->fetch();

header("Location: account.php");
?>