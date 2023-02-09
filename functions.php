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
 * Displays collection as an assoc array
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


/**
 * Displays the values from an array of films into HTML code to display info on each film individually via a foreach loop
 *
 * @param array $films
 * @return string of each film's details
 */
function displayFilms(array $films): string
{
    $result = '';
    foreach ($films as $film) {
        if (array_key_exists('imageURL', $film)
            && array_key_exists('title', $film)
            && array_key_exists('year', $film)
            && array_key_exists('character', $film)
            && array_key_exists('rating', $film)) {
            $result .= '<div class="film_collection">
                        <article>
                            <div class="film_info1">
                                <img src="' . $film['imageURL'] . '" alt="stock image">
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
    }
    return $result;
}


/**
 * sanitizes and validates user input for new film item. Returns either 'valid' or 'invalid'
 *
 * @param $title
 * @param $imageURL
 * @param $year
 * @param $mainCharacter
 * @param $rating
 * @return string
 */
function validateAddNewItem(string $title, string $imageURL, string $year, string $mainCharacter, string $rating): string
{
    $result = null;
    $title = filter_var($title, FILTER_SANITIZE_STRING);
    $title = preg_match('/(^[_A-z0-9]*((-|\s)*[_A-z0-9])*$){0,250}/', $title);

    $year = preg_match('/(?:(?:19|20)[0-9]{2})/', $year);

    $imageURL= filter_var($imageURL, FILTER_SANITIZE_URL);
    $imageURL = filter_var($imageURL, FILTER_VALIDATE_URL);

    $mainCharacter = filter_var($mainCharacter, FILTER_SANITIZE_STRING);
    $mainCharacter = preg_match('/(^[_A-z0-9]*((-|\s)*[_A-z0-9])*$){0,250}/', $mainCharacter);

    $rating = in_array($rating, range('0','10'));

    if ($title && $year && $imageURL && $mainCharacter && $rating) {
       return $result = true;
    } else{
        return $result = false;
    }
}


/**
 * Adds new film details to MySQL
 *
 * @param PDO $db
 * @param string $title
 * @param string $imageURL
 * @param string $year
 * @param string $mainCharacter
 * @param string $rating
 *
 * @return void
 */
function insertNewFilm (PDO $db, string $title, string $imageURL, string $year, string $mainCharacter, string $rating): void
{
    $stmnt = $db->prepare("INSERT INTO `films` (`title`, `year`, `character`, `imageURL`, `rating`) VALUES (:title, :year, :character, :imageURL, :rating);");
    $stmnt->bindParam(':title', $title);
    $stmnt->bindParam(':year', $year);
    $stmnt->bindParam(':character', $mainCharacter);
    $stmnt->bindParam(':imageURL', $imageURL);
    $stmnt->bindParam(':rating', $rating);
    $stmnt->execute();
}


