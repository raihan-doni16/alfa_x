<?php 
session_start();
include "koneksi.php";

$username =$_POST["username"];
$password =$_POST["password"];
$stmt = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'") or die (mysql_error());
  $cek = mysqli_num_rows($stmt);
  if($cek==0){
     echo '<script languange = "javascript"> alert ("username atau password anda salah); document.location"login-admin.php"<\script>';
  } else{
    echo 'login sukses';
  }

?>
