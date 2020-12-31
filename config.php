<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "bljr_crud";

$conn = mysqli_connect($server, $user, $password, $db);

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
// echo "Connected successfully";
// mysqli_close($db);

?>