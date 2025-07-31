<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$host = "localhost";
$user = "root";
$pasd = "";
$dbname = "chaiwat";
$con = mysqli_connect(hostname: $host, username: $user, password: $pasd, database: $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}