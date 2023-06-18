<?php 
include('koneksi.php');

$id_reservasi = $_POST['id_reservasi'];
$nama_menu = $_POST['nama'];
$harga = $_POST['harga'];
$kapasitas = $_POST['kapasitas'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

move_uploaded_file($source, $folder.$nama_file);
$edit = mysqli_query($koneksi, "UPDATE reservasi SET nama='$nama_menu',  harga='$harga',  kapasitas='$harga', gambar='$nama_file' WHERE id_reservasi='$id_reservasi' ");

if($edit)
	header('location: daftarmenu-admin.php');
else
	echo "Edit Menu Gagal";


 ?>