<?php

require_once 'config.php';

// Ambil data dari tiap elemen dalam form
$id = $_POST["id"];
$nama = htmlspecialchars($_POST["nama"]);
$nim = htmlspecialchars($_POST["nim"]);

// query insert data
$query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim' WHERE id = $id";
mysqli_query($db, $query);

if (isset($_POST["submit"]) < 1) {
  header("Location: form-edit.php?id=$id&status=berhasil");
  exit();
} else {
  header("Location: form-edit.php?id=$id&status=tidak berhasil");
}
