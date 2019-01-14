<?php

session_start();

if(!(isset($_SESSION['user'])))
{
  header("location:../login/form-login.php");
}

include '../connect.php';

$cari = $_GET['cari'];
$query = "SELECT * FROM dosen WHERE nama_dosen LIKE '%$cari%'";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>SIUNIV</title>
<style media="screen">
  body{
    font-family: Verdana;

  }
  table {
    border-collapse: collapse;
}
table tr:nth-child(even){
  background-color: #f2f2f2;
}

table, th, td {
    border: 0
}

  tr:nth-child(even) {background-color: #f2f2f2;}
  .sidenav {
    height: 100%;
    width: 14%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 1%;
}

.sidenav a {
    padding: 4% 4% 4% 10%;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 15%; /* Same as the width of the sidenav */
}
center
{
  font-family: Raleway;
  font-size: 200%;
}
@media screen and (max-height: 75%) {
  .sidenav {padding-top: 5%;}
  .sidenav a {font-size: 6%;}
}

</style>
   </head>
   <body>
     <div class="sidenav">
  <center> SIUNIV </center>
  <a href ="../matakuliah/read.php"target="self">Matakuliah</a>
  <a href="form-create.php">Tambah dosen</a>
  <a href="../login/logout.php">Logout</a>
</div>
<div class="main">

<form action="search.php" method="get">
  <input type="search" name="cari" placeholder="Masukkan Pencarian">
  <input type="submit" value="Cari">
</form>
     <table border="1">
       <h2>Data Dosen</h2>
       <tr>
         <th>No.</th>
         <th>Nama Dosen</th>
         <th>Telepon</th>
         <th colspan="2">Aksi</th>
       </tr>
       <?php if ($num > 0) {
         $no = 1;
         while ($data = mysqli_fetch_assoc($result)) {
           echo "<tr>";
           echo "<td>" . $no. "</td>";
           echo "<td>" . $data['nama_dosen']."</td>";
           echo "<td>" . $data['telp'] . "</td>";
           echo "<td><a href='form-update.php?id_dosen=".$data['id_dosen']."'>Edit </a>|";
           echo "<td> <a href='delete.php?id_dosen=".$data['id_dosen']."'onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ?\"')>Hapus </a></td>";
           echo "</tr>";
           $no++;
           # code...
         }
         # code...
       }
else {
  echo"<td colspan='3'> Tidak ada data</td>";
}


        ?>
     </table>
     </div>
   </body>
 </html>
