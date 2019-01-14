<?php

session_start();

if(!(isset($_SESSION['user'])))
{
  header("location:../login/form-login.php");
}

include '../connect.php';

$query = "SELECT * FROM dosen";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>SIUNIV</title>
<style media="screen">
html,h1,h2,h3,h4,h5,h6,p,ul{
  margin: 0;
  padding: 0;
}
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}


.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}
.header-right {
  float: right;
}

@media screen and (max-width:500px){
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
  .wrapper{
    margin: 0 auto;
  }
  .content{
    padding-left: 100px;
  }
}
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
    margin-left: 15%;
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

body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px !important;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
   </head>
   <body>
     <div class="header">
  <a href="#default" class="logo">CompanyLogo</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
     <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href ="../matakuliah/read.php"target="self">Matakuliah</a>

  <a href="form-create.php">Tambah Dosen</a>
  <a href="../login/logout.php">Logout</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ Buka</span>
<div id="main">

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

       }
else {
  echo"<td colspan='3'> Tidak ada data</td>";
}


        ?>
     </table>
     </div>
   </body>
 </html>
 <script type="text/javascript">


function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}

</script>
