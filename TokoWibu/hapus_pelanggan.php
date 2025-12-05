<?php 
include 'config/koneksi.php';

if ($_GET['id_pelanggan']){
    $id = $_GET['id_pelanggan'];

    $sql = "DELETE FROM pelanggan where id_pelanggan=$id";

    if ($conn->query($sql) === true){
        header("Location: pelanggan.php?success=1");
        exit;
    }else{
        $error = urlencode($conn->error);
        header("Location: pelanggan.php?error=$error");
        exit;
    }
}else{
    header("Location: pelanggan.php");
    exit;
}
?>