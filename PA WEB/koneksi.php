<?php

$host = "localhost";
$user = "root";
$pass = "" ;
$db = "endugi_clothes";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Gagal Terhubung".mysqli_connect_error());
}

?>