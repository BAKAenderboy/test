<?php
include 'config/koneksi.php';

if ($_POST){
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp = $_POST['no_hp'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO pelanggan (nama, jenis_kelamin, no_hp, tanggal_lahir, alamat) VALUES ('$nama', '$jenis_kelamin', '$no_hp', '$tanggal_lahir', '$alamat')";

    if ($conn->query($sql) === true){
        header("Location: pelanggan.php");
        exit;
    }else{
        header("Location: form_pelanggan.php");
        exit;
    }
}else{
    header("Location: form_pelanggan.php");
    exit;
}

?>