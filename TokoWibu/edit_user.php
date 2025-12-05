<?php
include 'config/koneksi.php';

if (isset ($_GET['id_user'])) {
    $id = $_GET['id_user'];
    $result = $conn->query("SELECT * FROM user WHERE id_user = $id");
    $row = $result->fetch_assoc();
} else {
    header("Location: index.php");
    exit;
}
?>

<?php include "include/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Data User</h3>
                </div>
                <div class="card-body">
                    <form action="update_user.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">ID</label>
                            <input type="text" name="id_user" class="form-control" required readonly value = <?= $row['id_user']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required value = <?= $row['nama']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" required value = <?= $row['jenis_kelamin']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">E-Mail</label>
                            <input type="text" name="email" class="form-control" required value = <?= $row['email']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">password</label>
                            <input type="text" name="password" class="form-control" required value = <?= $row['password']?>>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "include/foother.php"; ?>