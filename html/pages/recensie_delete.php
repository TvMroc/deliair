<?php
session_start();
include 'conn.php';


if (!$_SESSION['role'] > 2 ) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];

$sql = "DELETE FROM recensies WHERE recensie_id=:id";
$stmt = $connection->prepare($sql);
$stmt->execute(['id' => $id]);

header("Location: adminpanel.php");
exit();
?>