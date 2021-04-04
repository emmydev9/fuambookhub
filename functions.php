<?php
// replace this database information with yours
// please contact the author at chiemelienwanya@gmail.com for documentation
$dbhost = "localhost";
$dbname = "";
$dbuser = "chiemelienwanya@gmail.com";
$dbpass = "";


$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($connection->connect_error) die("fatal error");

function createTable($name, $query) {
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exits";
}

function queryMysql($query) {
    global $connection;
    $result = $connection->query($query);
    if(!$result) die("Fatal Error");
    return $result;
}

function sanitizeString($var) {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var); 
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
}

?>