<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["title"], $_POST["artist"], $_POST["url"], $_POST["year"], $_POST["genre"])) {

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

    $disksUpdated = json_encode($disks, JSON_PRETTY_PRINT);
    file_put_contents("./disks.json", $disksUpdated);
}

header("Location: index.php");
?>