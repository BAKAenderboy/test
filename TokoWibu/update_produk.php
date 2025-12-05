<?php
include 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $stok = $_POST['stok'];
    $distributor = $_POST['distributor'];
    
    $sql = "UPDATE produk SET nama_produk='$nama_produk', stok = '$stok', distributor ='$distributor' WHERE id_produk =$id_produk";

    if ($conn->query($sql) === TRUE){
        header("Location: index.php?success=1");
        exit;
    } else {
        $error = urlencode($conn->error);
        header("Location: index.php?error=$error");
        exit;
    }
}
?>
