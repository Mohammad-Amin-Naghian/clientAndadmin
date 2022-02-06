<?php
session_start();
// instead of Call new connection repeatedly we create this file and call it for every file

try {
    $option = [
       MYSQLI_INIT_COMMAND=>'SET NAMES utf8'
    ];
    $conn = new PDO("mysql:host=localhost;dbname=acebinac_iosapp", 'root', '',$option);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    /*echo "Connected Successfully";*/
} catch (PDOException $e) {
    echo "Connection failed";
}
?>