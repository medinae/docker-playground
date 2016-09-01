<?php

$servername = "192.168.60.170";
$port       = 8443;

$username   = "docker";
$password   = "docker-pass";
$dbname     = "docker-db";

$result = null;

try {
    $db_connection = pg_connect("host=$servername port=$port dbname=$dbname user=$username password=$password");
    $result = pg_query($db_connection, "SELECT * FROM user");
} catch(\Exception $e) {
    echo 'Error'.$e->getMessage();
}

var_dump($result);

