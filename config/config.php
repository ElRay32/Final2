<?php
$hostname = "localhost";
$username = "root";
$passw = "";
$dbname = "final2";

$conn = mysqli_connect($hostname, $username, $passw, $dbname);
if (!$conn) {
    echo "Error en la conexion de BD...";
}

?>