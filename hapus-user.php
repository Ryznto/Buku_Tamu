<?php
    // panggil file function php
    require_once 'function.php';

    // jika ada id
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        if (hapus_user($id) > 0) {
            // jika data berhasilvdi hapus maka akan muncul alert
            echo "<script>alert('Data berhasil di hapus!')</script>";
            // redirect kehalaman buku-tamu.php
            echo "<script>window.location.href='users.php'</script>";
        } else {
            // jika gagal di hapus
            echo "<script>alert('Data gagal di hapus!')</script>";  
            echo "<script>window.location.href='users.php'</script>";
        }
    }

?>