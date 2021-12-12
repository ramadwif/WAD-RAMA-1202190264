<?php
include("config.php");

$id_booking = $_GET['id_booking'];
$data = "DELETE FROM bookings WHERE id_booking='$id_booking'";
$updatedata = mysqli_query($conn, $data);

header("Location: Rama_Bookings.php");
?>