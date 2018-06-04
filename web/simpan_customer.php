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
$email=$_POST['email'];
$notelp=$_POST['notelp'];
$alamat=$_POST['alamat'];
$tanggal=$_POST['tanggal'];
$waktu=$_POST['waktu'];
$orang=$_POST['orang'];

// membuat table customer
$sql = "INSERT INTO pesan(nama, email, notelp, alamat, tanggal, waktu, orang) VALUES ('$nama','$email','$notelp','$alamat', '$tanggal','$waktu', '$orang')";

if($konek->query($sql)){
   echo "
<script type='text/javascript'>
 setTimeout(function () { 
 swal({
            title: 'Pemesanan Berhasil',
            text:  '$email',
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