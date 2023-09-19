<?php

require_once __DIR__ . '/Movie.php';

$movie1 = new Movie('Il Padrino', 'Francis Ford Coppola', 'en', ['Gangster', 'Thriller'], 175);

$movie2 = new Movie('Titanic', 'James Cameron', 'en', ['Romantico', 'Storico'] , 195);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>php-oop-1</title>
</head>
<body>
    
    <div class="container">

        <h1 class="py-5 text-center text-danger">MOVIES</h1>

        <div class="row row-cols-2">

            <div class="col">

            <div class="card text-center">
                <ul class="list-group list-group-flush">

                    <?php echo
                    '<li class="list-group-item">' .$movie1->getTitle() .'</li>'
                    .'<li class="list-group-item">' .$movie1->getDirector() .'</li>'
                    .'<li class="list-group-item">' .$movie1->getOriginalLanguage() .'</li>'
                    ?>

                    <?php
                    $genresArray = $movie1->getGenres();
                    echo '<li class="list-group-item">';
                    for ($i = 0; $i < count($genresArray); $i++) {
                        echo "$genresArray[$i] ";
                    }
                    echo '</li>'
                    ?>
                    
                    <?php
                    '<li class="list-group-item">' .$movie1->getLength() .'</li>'
                    ?>

                </ul>
            </div>

            </div>

            <div class="col">

            <div class="card text-center">
                <ul class="list-group list-group-flush">

                    <?php echo
                    '<li class="list-group-item">' .$movie2->getTitle() .'</li>'
                    .'<li class="list-group-item">' .$movie2->getDirector() .'</li>'
                    .'<li class="list-group-item">' .$movie2->getOriginalLanguage() .'</li>'
                    ?>

                    <?php
                    $genresArray = $movie2->getGenres();
                    echo '<li class="list-group-item">';
                    for ($i = 0; $i < count($genresArray); $i++) {
                        echo "$genresArray[$i] ";
                    }
                    echo '</li>'
                    ?>
                    
                    <?php
                    '<li class="list-group-item">' .$movie2->getLength() .'</li>'
                    ?>
                    
                </ul>
            </div>

            </div>

        </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>