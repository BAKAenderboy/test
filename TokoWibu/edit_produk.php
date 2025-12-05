<?php
include 'config/koneksi.php';

if (isset ($_GET['id_produk'])) {
    $id = $_GET['id_produk'];
    $result = $conn->query("SELECT * FROM produk WHERE id_produk = $id");
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
                    <h3 class="card-title">Edit Data Produk</h3>
                </div>
                <div class="card-body">
                    <form action="update_produk.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">ID</label>
                            <input type="text" name="id_produk" class="form-control" required readonly value = <?= $row['id_produk']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" required value = <?= $row['nama_produk']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" name="stok" class="form-control" required value = <?= $row['stok']?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Distributor</label>
                            <input type="text" name="distributor" class="form-control" required value = <?= $row['distributor']?>>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "include/foother.php"; ?>