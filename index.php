<?php

require_once 'functions.php';

$db = createDbConn();
$films = displayDb($db);

echo '<pre>';
var_dump($films);
echo '</pre>';