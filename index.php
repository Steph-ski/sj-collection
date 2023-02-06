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
    <section class="overall">
        <h1> Disney Film Collection</h1>

    </section>

</header>

<main>
    <section class="overall">

    </section>

</main>



</body>
</html>