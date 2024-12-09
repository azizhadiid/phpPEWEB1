<?php

include 'config.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];

//query
$query_simpan = "INSERT INTO mahasiswa (nama, nim) 
				values ('$nama','$nim')";
$simpan = mysqli_query($db, $query_simpan);

//cek
if ($simpan) {
	header("Location: form-tambah.php?status=sukses");
	exit();
} else {
	header("Location: form-tambah.php?status=gagal");
}
