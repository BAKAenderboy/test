<?php
include 'config/koneksi.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login    = trim($_POST['email']);
    $password = $_POST['password'];
    if ($login === '' || $password === '') {
        header('Location: login.php?error=Email/Username dan password wajib diisi');
        exit;
    }
    $sql    = "SELECT * FROM user 
               WHERE email = '$login' 
                  OR nama  = '$login'";
    $result = $conn->query($sql);
    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if ($user['password'] === sha1($password)) {
            $_SESSION['id_user']       = $user['id_user'];
            $_SESSION['nama']          = $user['nama'];
            $_SESSION['jenis_kelamin'] = $user['jenis_kelamin'];
            $_SESSION['email']         = $user['email'];
            $_SESSION['is_login']      = true;
            header('Location: index.php');
            exit;
        } else {
            header('Location: login.php?error=Password salah');
            exit;
        }
    } else {
        header('Location: login.php?error=Email/Username tidak ditemukan');
        exit;
    }
}
?>
