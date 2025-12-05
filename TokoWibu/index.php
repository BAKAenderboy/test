<?php include 'include/header.php';
$result = $conn->query("SELECT * FROM produk");
?>

<div class="container">
    <div class='row'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-title'>
                    <h3>List Produk</h3>
                </div>
                <div class='card-body'>
                    <a href="form_produk.php" class="btn btn-primary">Tambah</a>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <td>Action</td>
                                <td>ID</td>
                                <td>Nama Produk</td>
                                <td>Stok</td>
                                <td>Distributor</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($result && $result->num_rows > 0 ) : ?>
                                <?php while($row = $result->fetch_assoc()) : ?>
                                    <tr>
                                        <td>
                                            <a href="edit_produk.php?id_produk=<?= $row['id_produk'] ?>"class="btn btn-warning">Edit</a>
                                            <a href="hapus_produk.php?id_produk=<?= $row['id_produk'] ?>"class="btn btn-danger">Hapus</a>
                                        </td>
                                        <td><?= $row['id_produk'] ?></td>
                                        <td><?= $row['nama_produk'] ?></td>
                                        <td><?= $row['stok'] ?></td>
                                        <td><?= $row['distributor'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan='4'>Data Belum Tersedia</td>
                                </tr>
                            <?php endif ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
<?php include 'include/foother.php'; ?>
