<?php
if (!(isset($_POST['btnSimpan'])))
 {
  header("location: form-create.php");
}
include '../connect.php';

$nama_guru = $_POST['nama_guru'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jumlah_jam = $_POST['jumlah_jam'];
$query = "INSERT INTO t_guru(nama_guru,telp,email,alamat,jumlah_jam)
VALUES ('$nama_guru','$telp','$email','$alamat','$jumlah_jam')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if ($num > 0) {
  echo "Berhasil Tambah data <br>";
}
else {
  echo "Gagal";
}
echo "<a href='read.php'>Lihat data </a>";

 ?>
