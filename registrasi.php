<?php

include "koneksi.php";

$id =$_POST["id"];
$username =$_POST["username"];
$password =$_POST["password"];
$no_telepon =$_POST["no_telepon"];
$alamat =$_POST["alamat"];


    $stmt = $conn->prepare("insert into admin(id_admin, username, password, no_telp, alamat ) VALUES(?,?,?,?,?)"); 
    $stmt->bind_param("sssss",$id,$username,$password,$no_telepon,$alamat);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();


?>