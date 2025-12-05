<?php
include 'config/koneksi.php';

if ($_POST){
    $nama_produk = $_POST['nama_produk'];
    $stok = $_POST['stok'];
    $distributor = $_POST['distributor'];

    $sql = "INSERT INTO produk (nama_produk, stok, distributor) VALUES ('$nama_produk', '$stok', '$distributor')";

    if ($conn->query($sql) === true){
        header("Location: index.php");
        exit;
    }else{
        header("Location: form_produk.php");
        exit;
    }
}else{
    header("Location: form_produk.php");
    exit;
}

?>