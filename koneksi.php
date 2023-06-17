<?php
session_start();


$conn = new mysqli("localhost","root","","sistem_reservasi");
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
?>