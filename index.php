<?php

require_once "./server.php";

// var_dump($disks);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco dischi</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- /BOOTSTRAP -->
    <link rel="stylesheet" href="./style.css">
</head>
<body class="bg-dark">
    <header class="bg-black">
        <h1 class="text-center text-white py-3">I MIEI DISCHI</h1>
    </header> 

    <main class="pb-5">
        <!-- lista dischi -->
        <section>
            <div class="container w-75">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-3 mb-5">
                    <?php 
                    foreach($disks as $disk) {
                        echo '<div class="col">';
                        echo '<div class="card h-100 bg-dark text-white border-light" style="max-width: 300px; margin: 0 auto;">';
                        echo '<img src="'.$disk['url'].'" alt="'.$disk['titolo'].'" class="card-img-top p-3" style="max-height: 250px; object-fit: contain;">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">Titolo: '.$disk['titolo'].'</h5>';
                        echo '<p class="card-text">Autore: '.$disk['artista'].'</p>';
                        echo '<p class="card-text">Anno di pubblicazione: '.$disk['anno'].'</p>';
                        echo '<p class="card-text">Genere: '.$disk['genere'].'</p>';
                        echo '</div></div></div>';
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- form aggiunta disco -->
         <section class="container w-75">
            <h2 class="text-white">Aggiungi un disco</h2>
            <form class="form-control d-flex flex-column align-items-center">
                <div class="row mt-3">
                    <div class="col mb-3 d-flex flex-column">
                        <label for="title">Titolo disco</label>
                        <input id="title" name="title" type="text">
                    </div>

                    <div class="col mb-3 d-flex flex-column">
                        <label for="artist">Artista</label>
                        <input id="artist" name="artist" type="text">
                    </div>

                    <div class="col mb-3 d-flex flex-column">
                        <label for="url">URL della cover</label>
                        <input id="url" name="url" type="text">
                    </div>
                    <div class="col mb-3 d-flex flex-column">
                        <label for="year">Anno di pubblicazione</label>
                        <input id="year" name="year" type="number" min="1000" max="9999" value="2025">
                    </div>

                    <div class="col mb-3 d-flex flex-column">
                        <label for="genre">Genere</label>
                        <input id="genre" name="genre" type="text">
                    </div>
                </div>

                <button type="submit" class="btn bg-success text-white my-3">Aggiungi disco</button>
            </form>
         </section>
    </main>
    
</body>
</html>