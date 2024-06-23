<?php
session_start();
include 'conn.php';


if (!$_SESSION['role'] > 2 ) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];

$stmt = $connection->prepare("UPDATE recensies SET validated=:validate WHERE recensie_id=:id");
$result = $stmt->execute(['id' => $id, 'validate' => true]);

header("Location: adminpanel.php");
exit();
?>