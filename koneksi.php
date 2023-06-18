<?php
session_start();


$koneksi = new mysqli("localhost","root","","sistem_reservasi");
if($koneksi->connect_error){
    die('Connection Failed : '.$koneksi->connect_error);
}
?>