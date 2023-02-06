<?php

//creates a db connection

function createDbConn(): PDO
{
    $db = new PDO('mysql:host=db; dbname=sjdisneyFilms', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function displayDb(PDO $db): array
{
    $stmnt = $db->prepare('SELECT `id`,`title`,`year`,`character`,`imageURL`,`rating` FROM `films`;');
    $stmnt->execute();
    return $stmnt->fetchAll();
}
