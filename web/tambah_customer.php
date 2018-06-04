<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Basis Data Restoran</title>
  </head>
 <body background='abc.jpg'>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Tambah Data customer</h1>
    <form action="simpan_customer.php" method="post">
      <table>
        <tr>
          <td>id customer</td>
          <td>:</td>
          <td><input type="text" name="idcustomer"></td>
        </tr>
        <tr>
          <td>nama customer</td>
          <td>:</td>
          <td><input type="text" name="namacustomer"></td>
        </tr>
        <tr>
          <td>alamat customer</td>
          <td>:</td>
          <td><textarea name="alamatcustomer" rows="8" cols="40"></textarea></td>
        </tr>
        <tr>
          <td>makanan</td>
          <td>:</td>
          <td><input type="text" name="menumakanan"></td>
        </tr>
        <tr>
          <td>minuman</td>
          <td>:</td>
          <td><input type="text" name="menuminuman"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
