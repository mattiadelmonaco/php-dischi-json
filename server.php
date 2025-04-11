<?php
// controllo se il metodo è POST e se tutti i valori sono impostati, se è tutto corretto procedo
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["title"], $_POST["artist"], $_POST["url"], $_POST["year"], $_POST["genre"])) {

    $disksText = file_get_contents("./disks.json"); // prendo i dati da disks.json 
    $disks = json_decode($disksText, true); // trasformo il json in struttura php

    // creo il nuovo disco in array php con valori presi dal form su index.php (metodo post)
    $newDisk = [
        "titolo" => $_POST["title"],
        "artista" => $_POST["artist"],
        "url" => $_POST["url"],
        "anno" => $_POST["year"],
        "genere" => $_POST["genre"]
    ];

    $disks[] = $newDisk; // nell'array con tutti i dischi aggiungo ([]) il nuovo disco

    $disksUpdated = json_encode($disks, JSON_PRETTY_PRINT); // converto la struttura php in json (json_pretty_print serve a rendere json più leggibile e non in un'unica riga)
    file_put_contents("./disks.json", $disksUpdated); // salvo il nuovo elenco di dischi in disks.json sovrascrivendolo
}

header("Location: index.php");
?>