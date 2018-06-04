<?php
// membuat koneksi
$konek = new mysqli("localhost","root","");

// mengecek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

// membuat perintah sql create database
$sql = "CREATE DATABASE restoran";
if($konek->query($sql)){
	echo "Database BERHASIL dibuat";
}
else{
	echo "Database GAGAL dibuat karena : ".$konek->error;
}
// memutus koneksi
$konek->close();
?>

<html>
 <body background='abc.jpg'> </html>