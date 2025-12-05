<?php 
include 'config/koneksi.php';

if ($_GET['id_produk']){
    $id = $_GET['id_produk'];

    $sql = "DELETE FROM produk where id_produk=$id";

    if ($conn->query($sql) === true){
        header("Location: index.php?success=1");
        exit;
    }else{
        $error = urlencode($conn->error);
        header("Location: index.php?error=$error");
        exit;
    }
}else{
    header("Location: index.php");
    exit;
}
?>