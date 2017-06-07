<?php

//uitlezen formulier
$orderID = $_POST["orderID"];
$order_time = $_POST["order_time"];
$cust_firstname = $_POST["cust_firstname"];
$cust_lastname = $_POST["cust_lastname"];
$cust_email = $_POST["cust_email"];
$cust_country = $_POST["cust_country"];
$cust_zip = $_POST["cust_zip"];
$cust_state = $_POST["cust_state"];
$cust_city = $_POST["cust_city"];
$cust_address = $_POST["cust_address"];
$cust_phone = $_POST["cust_phone"];

//maak verbinding met webshop2017
include 'db_config.php';

//voeg de gegevens toe aan de tabel klanten
$sql = "INSERT INTO orders
            VALUES ( $orderID, '$order_time', '$cust_firstname', '$cust_lastname', '$cust_email', '$cust_country', '$cust_zip', '$cust_state', '$cust_city', '$cust_address', '$cust_phone')";

//controleer of het toevoegen gelukt is
$results = $db ->exec($sql);
echo 'resultaat: '.$results .' bestelling toegevoegd. <br />';
?>