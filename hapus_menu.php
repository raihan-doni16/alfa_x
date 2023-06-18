<?php 

include('koneksi.php');

$id_menu = $_GET['id_menu'];

$hapus= mysqli_query($koneksi, "DELETE FROM produk WHERE id_menu='$id_menu'");

if($hapus){
    echo "Hapus Menu Sukses";
	header('location: daftarmenu-admin.php');
}

else
	echo "Hapus data gagal";

 ?>