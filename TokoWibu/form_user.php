<?php include "include/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Data User</h3>
                </div>
                <div class="card-body">
                    <form action="simpan_user.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nama User</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">E-Mail</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "include/foother.php"; ?>