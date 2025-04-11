<?php

$disksText = file_get_contents("./disks.json");

$disks = json_decode($disksText, true);

// var_dump($disks);

?>