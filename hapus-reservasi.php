<?php 

include('koneksi.php');

$id_reservasi = $_GET['id_reservasi'];

$hapus= mysqli_query($koneksi, "DELETE FROM reservasi WHERE id_reservasi='$id_reservasi'");

if($hapus){
    echo "Hapus Daftar reservasi Sukses";
	header('location: daftarmenu-admin.php');
}

else
	echo "Hapus data gagal";

 ?>