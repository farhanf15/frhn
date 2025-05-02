<?php 
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "1";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal terkoneksi");
}