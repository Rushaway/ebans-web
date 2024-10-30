<?php
include('steam.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $steamid = $_POST['steamid'];
    $steam = new Steam(); // Instantiate the Steam class
    $result = $steam->verifyAndConvertSteamID($steamid); // Call the method on the instance
    echo json_encode($result);
}
?>