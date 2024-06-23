<?php 
session_start();
include 'conn.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
if (empty($_POST["bookingid"]) || empty($_POST["userid"]) || empty($_POST["land"]) || empty($_POST["startdatum"]) || empty($_POST["einddatum"])) {
    header("Location: adminpanel.php");
    exit();
}

$bookingid = $_POST["bookingid"];
$userid = $_POST["userid"];
$country = $_POST["land"];
$startdatum = $_POST["startdatum"];
$einddatum = $_POST["einddatum"];

$stmt = $connection->prepare("INSERT INTO bookings (booking_id, id, country, start_date, end_date) VALUES (:bookingid, :userid, :country, :startdatum, :einddatum)");
$stmt->bindParam(":bookingid", $bookingid);
$stmt->bindParam(":userid", $userid);
$stmt->bindParam(":country", $country);
$stmt->bindParam(":startdatum", $startdatum);
$stmt->bindParam(":einddatum", $einddatum);
$stmt->execute();

header("Location: adminpanel.php");
?>
