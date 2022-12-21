<?php

$host = "localhost";
$username = "root";
$password = "dangthithanhngan225";
$dbname = "walkystore";

$conn = mysqli_connect ($host, $username, $password, $dbname);

if ($conn) {
}

else {
    echo "Kết nối thất bại!" .mysqli_connect_error();
}

?>