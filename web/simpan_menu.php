<html>
<head>
<link rel="stylesheet" href="alert/css/sweetalert.css">
</head>
<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$nama=$_POST['nama'];
$tanggal=$_POST['tanggal'];
$notelp=$_POST['notelp'];
$alamat=$_POST['alamat'];
$menu1=$_POST['menu1'];
$jumlah1=$_POST['jumlah1'];
$menu2=$_POST['menu2'];
$jumlah1=$_POST['jumlah2'];
$menu3=$_POST['menu3'];
$jumlah1=$_POST['jumlah3'];

// membuat table customer
$sql = "INSERT INTO menu(nama, tanggal, notelp, alamat, menu1, jumlah1, menu2, jumlah2, menu3, jumlah3) VALUES ('$nama','$tanggal','$notelp','$alamat', '$menu1', '$jumlah1', '$menu2', '$jumlah2', '$menu3', '$jumlah3')";

if($konek->query($sql)){
   echo "
<script type='text/javascript'>
 setTimeout(function () { 
 swal({
            title: 'Pemesanan Berhasil',
            text:  '$name',
            type: 'success',
            timer: 3000,
            showConfirmButton: true
        });  
 },10); 
 window.setTimeout(function(){ 
  window.location.replace('index.html');
 } ,3000); 
</script>";

}

?>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>

</html>