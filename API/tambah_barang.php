<?php
include "koneksi.php";
$namaBarang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

$sql = mysqli_query($con, "INSERT INTO barang(nama_barang, stok, deskripsi) VALUES ('$namaBarang', '$stok', '$deskripsi')");
if ($sql) {
	echo json_encode($sql);
}
?>