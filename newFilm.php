<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="normalize.css"/>
    <link rel="stylesheet" type="text/css" href="stylesNewFilm.css"/>
    <title>Disney Film Collection - New Item</title>
</head>

<header>
    <h1> Disney Film Collection</h1>
</header>

<form method="post" action="newFilmData.php">
    <input type="text" name="tile" /><br>
    <input type="text" name="year" /><br>
    <input type="text" name="charcter" /><br>
    <input type="url"  name="imageURL" /><br>
    <input type="text" name="rating" /><br>
    <button>Add Item</button>
</form>