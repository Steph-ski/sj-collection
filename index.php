<?php

require_once 'functions.php';

$db = createDbConn();
$films = displayDb($db);

//echo '<pre>';
//var_dump($films);
//echo '</pre>';

?>


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
            <article>
                <div class="film_info1">
                    <img src="stock image.jpeg" alt="stock image">
                    <h2> Film Title </h2>
                </div>
                <div class="film_info2">
                    <p> Year of Release: </p>
                    <p> Main Character: </p>
                    <p> Rating out of 10: </p>
                </div>
            </article>

            <article>
                <div class="film_info1">
                    <img src="stock image.jpeg" alt="stock image">
                    <h2> Film Title </h2>
                </div>
                <div class="film_info2">
                    <p> Year of Release: </p>
                    <p> Main Character: </p>
                    <p> Rating out of 10: </p>
                </div>
            </article>

            <article>
                <div class="film_info1">
                    <img src="stock image.jpeg" alt="stock image">
                    <h2> Film Title </h2>
                </div>
                <div class="film_info2">
                    <p> Year of Release: </p>
                    <p> Main Character: </p>
                    <p> Rating out of 10: </p>
                </div>
            </article>

            <article>
                <div class="film_info1">
                    <img src="stock image.jpeg" alt="stock image">
                    <h2> Film Title </h2>
                </div>
                <div class="film_info2">
                    <p> Year of Release: </p>
                    <p> Main Character: </p>
                    <p> Rating out of 10: </p>
                </div>
            </article>

            <article>
                <div class="film_info1">
                    <img src="stock image.jpeg" alt="stock image">
                    <h2> Film Title </h2>
                </div>
                <div class="film_info2">
                    <p> Year of Release: </p>
                    <p> Main Character: </p>
                    <p> Rating out of 10: </p>
                </div>
            </article>

        </div>


    </section>

</main>
<section class="button_section">
    <div class="add_button">
        <a  href="#">Click Here to Add to Collection</a>
    </div>
</section>

<footer>

</footer>


</body>
</html>