<?php
include("config.php");
if (isset($_GET['id'])) {
    // ambil id dari query string
    $id = $_GET['id'];
    // buat query hapus
    $sql = "DELETE FROM mahasiswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    // apakah query hapus berhasil?
    if ($query) {
        header("Location: form-tambah.php?id=$id&status=berhasil");
    } else {
        header("Location: form-tambah.php?id=$id&status=gagal");
    }
} else {
    die("akses dilarang...");
}
