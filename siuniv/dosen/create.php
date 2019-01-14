<?php
if (!(isset($_POST['btnSimpan'])))
 {
  header("location: form-create.php");
}
include '../connect.php';

$nama_dosen = $_POST['nama_dosen'];
$telp = $_POST['telp'];

$query = "INSERT INTO dosen(nama_dosen, telp)
VALUES ('$nama_dosen','$telp')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if ($num > 0) {
  echo "Berhasil Tambah data";
}
else {
  echo "Gagal";
}
echo "<a href='read.php'>Lihat data </a>";
?>
