<html>
<head></head>
<body>
<center>

<h1>Daftar Pesanan </h1>
<h4>Pencarian (Nama/Tgl/Alamat)</h4>
<form action="" method="POST">
<input type="text" name="qcari">
<input type="submit" id="submit" name="submit" value="Cari">
<input type="submit" id="submit" name="submit1" value="Reset">
</form>
<h4>Pencarian (Tgl Awal - Tgl Akhir)</h4>
<form action="" method="POST">
<input type="date" name="tglawal">
<input type="date" name="tglakhir">
<input type="submit" id="submit" name="submit2" value="Cari">
<input type="submit" id="submit" name="submit1" value="Reset">
</form>
<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "zRestoran";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM pesan";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM  pesan where username like '%$qcari%' or tanggal like '%$qcari' or alamat like '%$qcari' ";
}

if(isset($_POST['submit2'])){
  $qcari=$_POST['tglawal'];
  $qcari2=$_POST['tglakhir'];
  $sql="SELECT * FROM  pesan where tanggal between '$qcari' and '$qcari2'";
}

if(isset($_POST['submit1'])){
  
  $sql="SELECT * FROM  pesan ";
}
$data = $konek->query($sql);

//echo "<a href='index.php'>Kembali ke Menu</a>";
//echo "<h1>Daftar Pesanan</h1>";
echo "<table border='1'>";
//echo "<table allign='center'>";
echo "<tr><td>No.</td><td>Nama Customer</td><td>Tanggal Pesan</td><td>Nomor Meja</td><td>Total Biaya</td><td>Pesan</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['id_pesanan']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['alamat']."</td>";
	echo "<td>".$row['tanggal']."</td>";
	echo "<td>".$row['totalbarang']."</td>";
	echo "<td>".$row['bayar']."</td>";
    echo "<td><a href='formupdate_customer.php?IdCustomer=".$row['id_pesanan']."'>Edit</a></td>";
    echo "<td><a href='delete_customer.php?IdCustomer=".$row['id_pesanan']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>

</body>
</html>