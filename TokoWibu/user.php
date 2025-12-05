<?php include 'include/header.php';
$result = $conn->query("SELECT * FROM user");
?>

<div class="container">
    <div class='row'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-title'>
                    <h3>List User</h3>
                </div>
                <div class='card-body'>
                    <a href="form_user.php" class="btn btn-primary">Tambah</a>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <td>Action</td>
                                <td>ID</td>
                                <td>Nama</td>
                                <td>Jenis Kelamin</td>
                                <td>E-Mail</td>
                                <td>Password</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($result && $result->num_rows > 0 ) : ?>
                                <?php while($row = $result->fetch_assoc()) : ?>
                                    <tr>
                                        <td>
                                            <a href="edit_user.php?id_user=<?= $row['id_user'] ?>"class="btn btn-warning">Edit</a>
                                            <a href="hapus_user.php?id_user=<?= $row['id_user'] ?>"class="btn btn-danger">Hapus</a>
                                        </td>
                                        <td><?= $row['id_user'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['jenis_kelamin'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['password'] ?></td>
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
