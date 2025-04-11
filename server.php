<?php

$disksText = file_get_contents("./disks.json");

$disks = json_decode($disksText, true);

$newDisk = [
    "titolo" => $_POST["title"],
    "artista" => $_POST["artist"],
    "url" => $_POST["url"],
    "anno" => $_POST["year"],
    "genere" => $_POST["genre"]
];

$disks[] = $newDisk;

$disksUptated = json_encode($disks);

file_put_contents("./disks.json", $disksUptated);

header("Location: index.php");
?>