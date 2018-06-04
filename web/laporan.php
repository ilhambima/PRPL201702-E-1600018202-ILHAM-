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
$db_name = "Restoran";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM menu";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM  menu where nama like '%$qcari%' or tanggal like '%$qcari' or alamat like '%$qcari' ";
}

if(isset($_POST['submit2'])){
  $qcari=$_POST['tglawal'];
  $qcari2=$_POST['tglakhir'];
  $sql="SELECT * FROM  menu where tanggal between '$qcari' and '$qcari2'";
}

if(isset($_POST['submit1'])){
  
  $sql="SELECT * FROM  menu ";
}
$data = $konek->query($sql);

//echo "<a href='index.php'>Kembali ke Menu</a>";
//echo "<h1>Daftar Pesanan</h1>";
echo "<table border='1'>";
//echo "<table allign='center'>";
echo "<tr><td>No.</td><td>Nama Customer</td><td>Tanggal</td><td>Nomor Telephone</td><td>Alamat Customer</td><td>Menu 1</td><td>Jumlah 1</td><td>Menu 2</td><td>Jumlah 2</td><td>Menu 3</td><td>Jumlah 3</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['tanggal']."</td>";
    echo "<td>".$row['notelp']."</td>";
	echo "<td>".$row['alamat']."</td>";
	echo "<td>".$row['menu1']."</td>";
	echo "<td>".$row['jumlah1']."</td>";
	echo "<td>".$row['menu2']."</td>";
	echo "<td>".$row['jumlah2']."</td>";
	echo "<td>".$row['menu3']."</td>";
	echo "<td>".$row['jumlah3']."</td>";
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