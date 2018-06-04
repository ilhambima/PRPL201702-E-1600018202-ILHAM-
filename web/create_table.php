<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

// membuat table customer
$sql = "CREATE TABLE reservasi(
  idpelanggan VARCHAR(10) NOT NULL PRIMARY KEY,
  username VARCHAR(15) NOT NULL,
  alamat VARCHAR(50),
  tanggal VARCHAR(30),
  order1 VARCHAR (10),
  order2 VARCHAR (10),
  order3 VARCHAR (10),
  order4 VARCHAR (10),
  order5 VARCHAR (10),
  order6 VARCHAR (10),
  totalbarang VARCHAR (10),
  bayar VARCHAR(50)

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