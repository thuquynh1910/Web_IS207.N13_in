<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "seventotheleft";

$conn = mysqli_connect ($host, $username, $password, $dbname);

if ($conn) {
}

else {
    echo "Kết nối thất bại!" .mysqli_connect_error();
}

?>