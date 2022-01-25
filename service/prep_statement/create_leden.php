<?php


function query_create_leden($postcode, $adres, $woonplaats, $lastname, $firstname, $housenumber, $phonenumber, $email)
{
    require_once __DIR__ . "/../conn.php";
    $query_create_postcode = "INSERT IGNORE INTO Postcode VALUES (
        '$postcode',
        '$adres',
        '$woonplaats'
    );";

    $conn->query($query_create_postcode);

    $query_create_lid = "INSERT INTO `Lid` VALUES (
        0, -- Auto Increment
        '$lastname',
        '$firstname',
        '$postcode',
        '$housenumber'
    );";

    $conn->query($query_create_lid);

    // Set lidnummer to the last isnerted ID
    $lidnummer = $conn->insert_id;

    $query_create_telefoonnummer = "INSERT INTO `Telefoonnummer` VALUES (
        '$phonenumber',
        '$lidnummer'
    );";

    $conn->query($query_create_telefoonnummer);

    $query_create_email = "INSERT INTO `Email` VALUES (
        '$email',
        '$lidnummer' 
    );";

    $conn->query($query_create_email);
}
