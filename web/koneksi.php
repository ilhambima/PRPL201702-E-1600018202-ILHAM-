<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "penjualan";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
?>