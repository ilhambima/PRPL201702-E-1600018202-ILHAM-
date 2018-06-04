<html>
<head>
	<link href ="struk.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head>
<body background='2.png'>

	<div class="container">
		<h1> WINNER WINNER </h1>
		<h1> CHICKEN DINNER </h1>
		<h2> Struck Pembayaran </h2>
		<h3> Jalan Pochinki is my city</h3>
		<h2> ******************** </h2>	

<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "Restoran";

$konek = new mysqli($host, $username, $password , $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}else {

$user = $_GET['user'];

$sql = "select * from reservasi where idpelanggan = '$user' ";
$data = $konek->query($sql);
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> NAMA PEMESAN </td>";
		echo "<td> : </td>";
		echo "<td>".$row['username']."</td>";
		echo "</tr>";
		echo "<td> : </td>";
		echo "<tr>";
		echo "<td> Burger </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order1']*20000;
		echo "</td>";
		echo "<td>".$row['order1']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Beef Steak </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order2']*30000;
		echo "</td>";
		echo "<td>".$row['order2']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Pizza A </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order3']*50000;
		echo "</td>";
		echo "<td>".$row['order3']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Sate Ayam</td>";
		echo "<td> : </td>";
		echo "<td>".$row['order4']*16000;
		echo "</td>";
		echo "<td>".$row['order4']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td> Sate Sapi </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order5']*20000;
		echo "</td>";
		echo "<td>".$row['order5']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Pizza B </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order6']*50000;
		echo "</td>";
		echo "<td>".$row['order6']."</td>";
		echo "</tr>";
		
		echo "<td></td>";
		echo "<tr>";
		echo "<td><b> JUMLAH BARANG </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['totalbarang'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> TOTAL HARGA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['bayar'];
		echo "</td>";
		echo "</tr>";
		echo "</table>";

	}	
}else{
	echo"Tidak dapat di cetak";
}


}
$konek->close();
?>
</div>
<h3><a href="#" onclick="window.print()"> Print </a> </h3>	
</body>
</html>