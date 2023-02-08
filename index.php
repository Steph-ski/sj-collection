<?php

require_once 'functions.php';

$db = createDbConn();
$films = displayDb($db);

$filmHtml = displayFilms($films);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="normalize.css"/>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <title>Disney Film Collection</title>
</head>

<body>

<header>
        <h1> Disney Film Collection</h1>
</header>

<main>
    <section class="overall">
        <div class="film_collection">
        <?php echo $filmHtml; ?>
        </div>
    </section>
</main>

<section class="button_section">
    <div class="add_button">
        <a  href="newFilm.php">Click Here to Add to Collection</a>
    </div>
</section>

</body>
</html>