<?php

session_start();



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

</header>

<body>
<main>
    <h1> Add New Film</h1>

<form method="post" action="newFilmData.php">
    <label for="title">Film Title:</label> <input type="text" name="title"/><br>
    <label for="year">Year of Release:</label> <input type="text" name="year" required/><br>
    <label for="character">Name of Main Character:</label> <input type="text" name="character" required/><br>
    <label for="imageURL">Image URL:</label> <input type="url"  name="imageURL" required/><br>
    <label for="rating">Rating out of 10:</label>
        <select name="rating">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="9">10</option>
            required </select> <br>
    <button>Add Item</button>
</form>
</main>
</body>
</html>
