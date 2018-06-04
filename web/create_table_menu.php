<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

// membuat table customer
$sql = "CREATE TABLE order(
  nama VARCHAR(15) NOT NULL,
  email VARCHAR(50),
  notelp VARCHAR (30),
  alamat VARCHAR(50),
  menu1 VARCHAR(10),
  jumlah1 VARCHAR(10),
  menu2 VARCHAR(10),
  jumlah2 VARCHAR(10),
  menu3 VARCHAR(10),
  jumlah3 VARCHAR(10)
)";

if($konek->query($sql)){
  echo "Table pesan BERHASIL dibuat!<br/>";
}else{
  echo "Table pesan GAGAL dibuat : ".$konek->error;
}
$konek->close();
?>

<html>
 <body background='abc.jpg'> </html>