<?php

$sname = "localhost";
$uname = "root";
$password = "";

$DbName = "GaleryDb";

$conn = mysqli_connect($sname, $uname, $password, $DbName);

if (!$conn) {
    echo "Nepovedlo se spojení";
    exit();
}