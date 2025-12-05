<?php
include 'config/koneksi.php';

if ($_POST){
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = "INSERT INTO user (nama, jenis_kelamin, email, password) VALUES ('$nama', '$jenis_kelamin', '$email', '$password')";

    if ($conn->query($sql) === true){
        header("Location: user.php");
        exit;
    }else{
        header("Location: form_user.php");
        exit;
    }
}else{
    header("Location: form_user.php");
    exit;
}

?>