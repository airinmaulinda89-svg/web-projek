<?php
$host = "localhost";
$user = "root";
$pass = "airinmaulinda08_";
$db   = "companyprofile";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if(!$koneksi){
    die("Gagal terkoneksi");
}