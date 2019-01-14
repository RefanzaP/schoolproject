<?php
include '../connect.php';

$cari = $_GET['cari'];
$kategori = $_GET['kategori'];
$query = "SELECT kode, nama_matkul, sks, semester, id_dosen, nama_dosen
FROM matakuliah LEFT JOIN dosen
USING (id_dosen)
WHERE $kategori LIKE '%$cari%'
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
     <table border = "1">
      <div class="sidenav">

          <center> SIUNIV </center>
          <a href ="../matakuliah/read.php"target="self">Matakuliah</a>
          <a href="form-create.php">Tambah matakuliah</a>
          <a href="../login/logout.php">Logout</a>

      </div>
       <tr>
         <th>No.</th>
         <th>Kode</th>
         <th>Matakuliah</th>
         <th>SKS</th>
         <th>Semester</th>
         <th>Dosen Pengajar</th>
         <th>Aksi</th>
       </tr>
       <?php
      if ($num > 0)
      {
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {?>

        <tr>
        <td> <?php echo $no; ?></td>
        <td><?php echo $data['kode'] ?></td>
        <td><?php echo $data['nama_matkul']; ?></td>
        <td><?php echo $data['sks']; ?></td>
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
        <tr>
          <td><a href="read.php">Back</a></td>
        </tr>
     </table>
   </body>
 </html>
