<?php

// Step 1 : Create a connection string
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "userdb";

// mysqli() driver is used to connect PHP with MySQL

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

?>