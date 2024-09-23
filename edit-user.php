<?php
include_once('templates/header.php');
require_once('function.php');

//jika ada id_usersss di URL
if (isset($_GET['id'])) {
    $id_user = $_GET['id'];
    //ambil data user yang  sesuai dengan id_userss
    $data = query("SELECT * FROM users WHERE id_user = '$id_user'")[0];
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ubah Data user</h1>

    <?php
    //jika da tombol simpan
    if (isset($_POST['simpan'])) {
        if (ubah_user($_POST) > 0) {
    ?>
            <div class="alert alert-success" role="alert">
                Data Berhasil diubah!
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger" role="alert">
                Data Gagal diubah!
            </div>
    <?php
        }
    }
    ?>


    <!-- Konten Edit Data user -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6>Data user</h6>
        </div>
+
        <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="id_user" id="id_user" value="<?= $id_user ?>">
                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_role" class="col-sm-3 col-form-label">User Role</label>
                    <div class=" col-sm-8">
                        <select class="form-control" id="user_role" name="user_role">
                            <option value="admin" <?= $data['user_role'] == 'admin' ? 'selected' : ''; ?>>Administrator</option>
                            <option value="operator" <?= $data['user_role'] == 'operator' ? 'selected' : ''; ?>>Operator</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-8 d-flex justify-content-end">
                        <div>
                            <a type="button" class="btn btn-danger btn-icon-split" href="users.php">
                                <span class="icon text-white-50">
                                    <i class="fas fa-chevron-left"></i>
                                </span>
                                <span class="text">kembali</span>
                            </a>
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<?php
include_once('templates/footer.php');
?>