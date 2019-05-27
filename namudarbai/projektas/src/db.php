<?php 

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "susisiekime");

$mysqli= new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error) {
    echo "Atsiprašome, bet svetainė susidūrė su problema. \n";
    echo 'Klaida: ' . $mysqli->connect_eroor . '\n';
    exit();
}

mysqli_query($mysqli, "INSERT INTO klientai (vardas, company, email, message)
VALUES('$_POST[name]', '$_POST[company]', '$_POST[email]', '$_POST[message]')"); 
