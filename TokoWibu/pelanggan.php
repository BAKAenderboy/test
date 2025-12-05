<?php include 'include/header.php';
$result = $conn->query("SELECT * FROM pelanggan");
?>

<div class="container">
    <div class='row'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-title'>
                    <h3>List Pelanggan</h3>
                </div>
                <div class='card-body'>
                    <a href="form_pelanggan.php" class="btn btn-primary">Tambah</a>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <td>Action</td>
                                <td>ID</td>
                                <td>Nama Pelanggan</td>
                                <td>Jenis Kelamin</td>
                                <td>Nomor Telepon</td>
                                <td>Tanggal Lahir</td>
                                <td>Alamat</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($result && $result->num_rows > 0 ) : ?>
                                <?php while($row = $result->fetch_assoc()) : ?>
                                    <tr>
                                        <td>
                                            <a href="edit_pelanggan.php?id_pelanggan=<?= $row['id_pelanggan'] ?>"class="btn btn-warning">Edit</a>
                                            <a href="hapus_pelanggan.php?id_pelanggan=<?= $row['id_pelanggan'] ?>"class="btn btn-danger">Hapus</a>
                                        </td>
                                        <td><?= $row['id_pelanggan'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['jenis_kelamin'] ?></td>
                                        <td><?= $row['no_hp'] ?></td>
                                        <td><?= $row['tanggal_lahir'] ?></td>
                                        <td><?= $row['alamat'] ?></td>
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
