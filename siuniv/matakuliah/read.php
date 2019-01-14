<?php
session_start();
if (!(isset($_SESSION['user']))) {
  header("location:../login/form-login.php");
}
include '../connect.php';

$query = "SELECT kode, nama_matkul, sks, semester, nama_dosen
FROM matakuliah LEFT JOIN dosen
USING (id_dosen)
ORDER BY kode";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
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
       border: 0;
       margin-left: 15%;
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

     <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href ="../dosen/read.php"target="self">Dosen anda</a>

  <a href="form-create.php">Tambah Matkul</a>
  <a href="../login/logout.php">Logout</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ Buka</span>
     <form action="search.php" method="get" style="margin-left:15%;">
       <input type="search" name="cari" placeholder="Input Here">
       <select name="kategori" id="">
         <option value="nama_matkul">Matakuliah</option>
         <option value="nama_dosen">Dosen</option>
         <option value="sks">SKS</option>
         <option value="semester">Semester</option>
       </select>
       <input type="submit" name="" value="Cari">
     </form>

     <table border = "1">
       <tr>
         <th>No.</th>
         <th>Kode</th>
         <th>Matakuliah</th>
         <th>SKS</th>
         <th>Semester</th>
         <th>Dosen Pengajar</th>
         <th>Aksi</th>
       </tr>

   </body>
 </html>

 <?php
if ($num > 0) {
  $no = 1;
  while ($data = mysqli_fetch_assoc($result)) {?>

  <tr>
  <td> <?php echo $no; ?></td>
  <td><?php echo $data['kode'] ?></td>
  <td><?php echo $data['nama_matkul'] ?></td>
  <td><?php echo $data['sks'] ?></td>
  <td><?php echo $data['semester']; ?></td>
  <td><?php if ($data['nama_dosen'] != NULL)
  {echo $data['nama_dosen'];}
  else {echo "-";}
   ?>
 </td>
  <td><a href="form-update.php?kode=<?php echo $data['kode'];?>">Edit</a>
    <a href="delete.php?kode=<?php echo $data['kode'];?>"
      onclick="return confirm('Anda yakin ingin menghapus data ?')"> Hapus</a>
  </td>

</tr>
<?php
$no++;
}
}
else {
  echo "<tr> <td colspan = '7'> Tidak ada data </td></tr>";
}
  ?>
</table>
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
