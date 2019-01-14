<?php
session_start();
if(!(isset($_SESSION['user'])))
{
  header("location:../login/form-login.php");
}
include '../connect.php';
$cari = $_GET['cari'];
$kategori = $_GET['kategori'];
$sort = $_GET['sort'];
$query = "SELECT * FROM t_guru WHERE $kategori LIKE '%$cari%' ORDER BY $sort";
$result = mysqli_query($connect,$query);
$num = mysqli_num_row

s($result);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">

          html,h1,h2,h3,h4,h5,h6,p,ul{
            margin: 0;
            padding: 0;
          }
     h2{
       margin-top: ;
     }

       th,td{
         padding : 15px;
       }
          body{
            font-family: Verdana;

            position: inherit;
          }
          table {
            width: 60%;
            border-collapse: collapse;
            padding: 50%;
        }
        table tr:nth-child(even){
          background-color: #f2f2f2;

        }

        table, th, td ,tr{
            border: 1;
            height: 25px;
            margin-top: 100px;
        }
        th{
          background-color: #6666ff;

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
            background-color:  #00cca3;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        label{
        font-family: Swis781 Lt Bt;
        padding: 8px 8px 8px 32px;
        COLOR : black;
        font-size: 30px;

      }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: white;
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
       <center><label>DATA MOKLET</label></center>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href ="read.php">Kembali</a>
  <a href ="../mapel/read.php">Mata Pelajaran</a>

  <a href="form-create.php">Tambah Data Guru</a>
  <a href="../login/logout.php">Logout</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ Buka</span>
<div id="main">
     <table border='1'>

       <tr>
         <th>Kode Guru</th>
         <th>Nama</th>
         <th>Jumlah jam</th>
         <th>Alamat</th>
         <th>Telp</th>
         <th>Email</th>
         <th colspan="2">Aksi</th>
       </tr>
       <?php
        if ($num > 0){
          $no = 1;
          while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";

            echo "<td>" . $data['kode_guru'];
            echo "<td>" . $data['nama_guru'];
            echo "<td>" . $data['jumlah_jam'];
            echo "<td>" . $data['alamat'];
            echo "<td>" . $data['telp'];
            echo "<td>" . $data['email'];
            echo "<td><a href='form-update.php?kode_guru=".$data['kode_guru']."'>Edit </a>";
          echo "<td> <a href='delete.php?kode_guru=".$data['kode_guru']."'onclick='return confirm(\"Apakah anda yakin?\")'>Hapus </a></td>";
            $no++;
          }
        }
        else {
          echo "<td colspan='3'>Tidak ada data</td>";
        }
        ?>
     </table>
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
