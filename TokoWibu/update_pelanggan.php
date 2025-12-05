<?php
include 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp = $_POST['no_hp'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    
    $sql = "UPDATE pelanggan SET nama ='$nama', jenis_kelamin = '$jenis_kelamin', no_hp ='$no_hp', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat' WHERE id_pelanggan =$id_pelanggan";

    if ($conn->query($sql) === TRUE){
        header("Location: pelanggan.php?success=1");
        exit;
    } else {
        $error = urlencode($conn->error);
        header("Location: pelanggan.php?error=$error");
        exit;
    }
}
?>
