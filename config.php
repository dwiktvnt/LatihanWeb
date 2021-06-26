<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    die("gagal koneksi" . mysqli::$connect_errno);
}
