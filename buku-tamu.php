<?php 
include_once('templates/header.php');
require_once('function.php');
?>

<!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Buku Tamu</h1>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Tamu</th>
                                            <th>Alamat</th>
                                            <th>No. Telp/HP</th>
                                            <th>Bertemu Dengan</th>
                                            <th>Kepentingan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        // penomoran auto-inctrumen
                                        $no =1;
                                        //query untuk memanggil semua data dari tabel buku_tamu
                                        $buku_tamu = query("SELECT * FROM buku_tamu");
                                        foreach($buku_tamu as $tamu): ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $tamu['tanggal'] ?></td>
                                            <td><?= $tamu['nama_tamu'] ?></td>
                                            <td><?= $tamu['alamat'] ?></td>
                                            <td><?= $tamu['no_hp'] ?></td>
                                            <td><?= $tamu['bertemu'] ?></td>
                                            <td><?= $tamu['kepentingan'] ?></td>
                                            <td><button class="btn btn-success" type="button">Ubah</button>
                                                <button class="btn btn-danger" type="button">Hapus</button></td>
                                        </tr>
                                       <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


</div>
<!-- /.container-fluid -->



<?php
include_once('templates/footer.php');
?>