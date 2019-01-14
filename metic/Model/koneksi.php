<?php
$host = "localhost";
$username = "root";
$password= "";
$db = "siswa";

$connect = mysqli_connect($host,$username,$password,$db);

if ($connect) {
  $status = "Connected";
}else {
  $status = "Fail to connect";
  mysqli_error($connect);
}
 ?>
