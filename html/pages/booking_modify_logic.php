<?php 
session_start();
include 'conn.php';

if (isset($_SESSION['role'])) {
    if (!$_SESSION['role'] > 2 ) {
        header("Location: login.php");
    }
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


$stmt = $connection->prepare("UPDATE bookings SET id=:userid, country=:country, start_date=:startdate, end_date=:enddate WHERE booking_id=:bookingid");
$result = $stmt->execute(['bookingid' => $bookingid, 'userid' => $userid, 'country' => $country, 'startdate' => $startdatum, 'enddate' => $einddatum]);
$users = $stmt->fetch();

header("Location: adminpanel.php");
?>
