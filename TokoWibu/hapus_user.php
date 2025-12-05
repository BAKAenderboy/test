<?php 
include 'config/koneksi.php';

if ($_GET['id_user']){
    $id = $_GET['id_user'];

    $sql = "DELETE FROM user where id_user=$id";

    if ($conn->query($sql) === true){
        header("Location: user.php?success=1");
        exit;
    }else{
        $error = urlencode($conn->error);
        header("Location: user.php?error=$error");
        exit;
    }
}else{
    header("Location: user.php");
    exit;
}
?>