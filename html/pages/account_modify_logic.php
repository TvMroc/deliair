<?php 
session_start();
include 'conn.php';

if (isset($_SESSION['role'])) {
    if (!$_SESSION['role'] > 2 ) {
        header("Location: login.php");
    }
}
if (empty($_POST["id"]) || empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"])) {
    header("Location: adminpanel.php");
    exit();
}

$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


$stmt = $connection->prepare("UPDATE users SET username=:user, email=:mail, password=:pass WHERE id=:id");
$result = $stmt->execute(['id' => $id, 'user' => $username, 'mail' => $email, 'pass' => $password]);
$users = $stmt->fetch();

header("Location: adminpanel.php");
?>
