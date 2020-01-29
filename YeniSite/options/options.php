<?php
$url = "YeniSite";


$mysql_username = "root";
$mysql_pw = "";
$mysql_database = "oyuncubilgisi";
$mysql_host = "localhost";

try {
    $db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database;charset=utf8", "$mysql_username", "$mysql_pw");
} catch ( PDOException $e ){
    print $e->getMessage();
}
