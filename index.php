<?php

require_once 'functions.php';

//creates a db connection
//$db = new PDO('mysql:host=db; dbname=sjdisneyFilms', 'root', 'password');
//$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//
////prepares the SQL statemnt to be run
//$stmnt = $db->prepare('SELECT `id`,`title`,`year`,`character`,`imageURL`,`rating` FROM `films`;');
//
////actually run it
//$stmnt->execute();
//
//$films = $stmnt->fetchAll(); //retrieves all results

$db = createDbConn();
$films = displayDb($db);

echo '<pre>';
var_dump($films);
echo '</pre>';