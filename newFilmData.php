<?php

require_once 'functions.php';

//if user gets to this page without submitting correct POST data, it will send them back to index page
if(!isset($_POST['title']) && !isset($_POST['imageURL']) && !isset($_POST['year']) && !isset($_POST['character']) && !isset($_POST['rating'])) {
    header('Location: index.php');
}

$title = $_POST['title'];
$imageURL = $_POST['imageURL'];
$year = $_POST['year'];
$mainCharacter = $_POST['character'];
$rating = $_POST['rating'];

$result = validateAddNewItem($title, $imageURL, $year, $mainCharacter, $rating);

if ($result) {
    $db = createDbConn();
    insertNewFilm($db, $title, $imageURL, $year, $mainCharacter, $rating);
}

header('Location: index.php');

