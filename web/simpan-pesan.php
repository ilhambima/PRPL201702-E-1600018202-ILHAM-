<html>
<body background='2.png'>
<?php
 
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

//$idpelanggan = $_POST['idpelanggan'];  
$idpelanggan = mysqli_real_escape_string($konek,$_POST['idpelanggan']);
$username = mysqli_real_escape_string($konek,$_POST['username']);
$alamat = mysqli_real_escape_string($konek, $_POST['alamat']);
$tanggal = mysqli_real_escape_string($konek, $_POST['tanggal']);
$order1 = mysqli_real_escape_string($konek,$_POST['order1']);
$order2 = mysqli_real_escape_string($konek,$_POST['order2']);
$order3 = mysqli_real_escape_string($konek,$_POST['order3']);
$order4 = mysqli_real_escape_string($konek,$_POST['order4']);
$order5 = mysqli_real_escape_string($konek,$_POST['order5']);
$order6 = mysqli_real_escape_string($konek,$_POST['order6']);
$totalbarang = mysqli_real_escape_string($konek,$_POST['totalbarang']);
$bayar = mysqli_real_escape_string($konek,$_POST['bayar']);

 //echo"Bayar =  $bayar";
 
$sql = "INSERT INTO reservasi (idpelanggan, username, alamat, tanggal, order1, order2, order3, order4, order5, order6, totalbarang, bayar ) VALUES ('$idpelanggan', '$username','$alamat','$tanggal','$order1', '$order2','$order3', '$order4', '$order5', '$order6', '$totalbarang', '$bayar' )";

//,'$order1','$order2','$order3','$order4','$order5','$order6','$order7','$order8','$order9','$order10','$order11','$order12'
//,101,102,103,104,201,202,203,204,301,302,303,304
if($konek->query($sql)){
  echo " <center><h1>Pemesanan telah Berhasil</h1>";
  echo "<a href='tampil_customer.php'> Tampil nota</a>";

  //echo '<form action="struck.php" method="POST">
   //     <input type="text" name="nama">
    //    <input type="submit" name="submit" value="Cetak Struk">
     //   </form></center>';
          
 
  //header("location: tampil_customer.php");
}else{
  echo "Data customer GAGAL ditambah : ".$konek->error."<br/>";
}

?>

</body>
</html>