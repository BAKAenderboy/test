<?php
include 'config/koneksi.php';

if (isset ($_GET['id_pelanggan'])) {
    $id = $_GET['id_pelanggan'];
    $result = $conn->query("SELECT * FROM pelanggan WHERE id_pelanggan = $id");
    $row = $result->fetch_assoc();
} else {
    header ("Location: pelanggan.php");
    exit;
}
?>

<?php include "include/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Pelanggan</h3>
                </div>
                <div class="card-body">
                    <form action="update_pelanggan.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">ID</label>
                            <input type="text" name="id_pelanggan" class="form-control" required readonly value = <?= $row['id_pelanggan']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Pelanggan</label>
                            <input type="text" name="nama" class="form-control" required value = <?= $row['nama']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" required value = <?= $row['jenis_kelamin']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor HP</label>
                            <input type="number" name="no_hp" class="form-control" required value = <?= $row['no_hp']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" required value = <?= $row['tanggal_lahir']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required value = <?= $row['alamat']?>>
                        </div>


                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "include/foother.php"; ?>