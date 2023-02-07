<?php

/**
 * Creates a DB connection
 *
 * @return PDO the db connection
 */
function createDbConn(): PDO
{
    $db = new PDO('mysql:host=db; dbname=sjdisneyFilms', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}


/**
 * Displays collection DB on index.php
 *
 * @param PDO $db
 * @return array of the films in the collection
 */
function displayDb(PDO $db): array
{
    $stmnt = $db->prepare('SELECT `id`,`title`,`year`,`character`,`imageURL`,`rating` FROM `films`;');
    $stmnt->execute();
    return $stmnt->fetchAll();
}

function displayFilms(array $films): string
{
    $result = '';
    foreach ($films as $film) {
        $result .= '<div class="film_collection">
                        <article>
                            <div class="film_info1">
                                <img src=' . $film['imageURL'] . ' alt="stock image">
                            </div>
                            <div class="film_info2">
                                <h2>' . $film['title'] . '</h2>
                                <p> Year of Release: ' . $film['year'] . '</p>
                                <p> Main Character: ' . $film['character'] . '</p>
                                <p> Rating out of 10: ' . $film['rating'] . '</p>
                            </div>
                         </article>
                     </div>';
    }
    return $result;
}

