<?php
include 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "UPDATE user SET nama ='$nama', jenis_kelamin = '$jenis_kelamin', email = '$email', password = '$password' WHERE id_user =$id_user";

    if ($conn->query($sql) === TRUE){
        header("Location: user.php?success=1");
        exit;
    } else {
        $error = urlencode($conn->error);
        header("Location: user.php?error=$error");
        exit;
    }
}
?>
