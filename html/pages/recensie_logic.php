<?php
session_start();
include 'conn.php';

if (empty($_POST["country"]) || empty($_POST["recensie"])) {
    header("Location: register.php");
    exit();
}

$country = $_POST["country"];
$recensie = $_POST["recensie"];
$id = $_SESSION['id'];

$stmt = $connection->prepare("INSERT INTO recensies (country, text, id) VALUES (:country, :recensie, :userid)");
$stmt->bindParam(":country", $country);
$stmt->bindParam(":recensie", $recensie);
$stmt->bindParam(":userid", $id);
$stmt->execute();

header("Location: dashboard.php");
?>