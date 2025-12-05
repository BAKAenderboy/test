<?php
$host = 'localhost';
//$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'toko';

$conn = new mysqli($host, $username, $password, $database);
    if($conn->connect_error){
        die('Koneksi Gagal :' .$conn->connect_error);
    }

?>