<?php
    //registreren klant 2.php
    //voert een nieuwe klant in de tabel klanten in

    //uitlezen formulier
    $klantid = $_POST["klantid"];
    $klantnaam = $_POST["klantnaam"];
    $klantadres = $_POST["klantadres"];
    $klantpostc = $_POST["klantpostc"];
    $klantplaats = $_POST["klantplaats"];
    $klantemail = $_POST["klantemail"];
    $klanttel = $_POST["klanttel"];

    //maak verbinding met webshop2017
    include 'db_config.php';

    //voeg de gegevens toe aan de tabel klanten
    $sql = "INSERT INTO klant
            VALUES ( $klantid, '$klantnaam', '$klantadres', '$klantpostc', '$klantplaats', '$klantemail', '$klanttel')";

    //controleer of het toevoegen gelukt is
    $results = $db->exec($sql);
    echo 'resultaat: '.$results .' record toegevoegd. <br />';
?>