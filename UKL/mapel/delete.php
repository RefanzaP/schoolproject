<?php
include '../connect.php';

$kode_mapel = $_GET['kode_mapel'];
$query = "DELETE FROM t_mapel WHERE kode_mapel = '$kode_mapel'";
$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if ($num > 0) {
  echo "Berhasil hapus";
}
else {
  echo "Gagal hapus data <br>";
}
echo "<a href='read.php'>Lihat data </a>";
 ?>
