<?php
session_start();
if(!(isset($_SESSION['user'])))
{
  header("location:../login/form-login.php");
}

include '../connect.php';
$query = "SELECT kode_mapel, mapel, alokasi_waktu, semester, nama_guru
FROM t_mapel LEFT JOIN t_guru
USING (kode_guru)
ORDER BY mapel";

        $result = mysqli_query($connect,$query);
          $num = mysqli_num_rows($result);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    /*header*/
    nav{
      float : right;
      margin-right: 50px;
    }
    /*body*/
         html,h1,h2,h3,h4,h5,h6,p,ul{
           margin: 0;
           padding: 0;
         }
         .header{
           background-color: #f1f1f1;
         }
         input[type=text] {
             width: 50px;
             box-sizing: border-box;
             border: 2px solid #ccc;
             border-radius: 4px;
             font-size: 16px;
             background-color: white;
             background-position: 10px 10px;
             background-repeat: no-repeat;
             padding: 12px 20px 12px 40px;
             -webkit-transition: width 0.4s ease-in-out;
             transition: width 0.4s ease-in-out;
         }

         input[type=text]:focus {
             width: 30%;
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

       .play {
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
    <header class="main-header">
      <nav>
        <ul>
          <form action="search.php" method="get" style="margin-left:15%;">
            <input type="text" name="cari" placeholder="🔍 Masukkan Pencarian..." id="search">
            <select name="kategori" id="search1">
              <option value="-" disabled selected>Pilih Pencarian</option>
              <option value="kode_mapel">Kode Mapel</option>
              <option value="nama_guru">Pengajar</option>
              <option value="semester">Semester</option>
              <option value="nama_guru">Nama Guru</option>
            </select>
            <select name="sort" id="">
              <option value="-" disabled selected>Sort By</option>
              <option value="kode_mapel">Kode Mapel</option>
              <option value="nama_guru">Pengajar</option>
              <option value="semester">Semester</option>
              <option value="nama_guru">Nama Guru</option>
              <option value="jumlah_jam">Jumlah Jam</option>
            </select>
            <input type="submit" name="" value="Cari">
          </form>
        </ul>
      </nav>
    </header>
    <div id="mySidenav" class="sidenav">
        <center><label>DATA MOKLET</label></center>
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
 <a href ="../guru/read.php">Data Guru</a>

 <a href="form-create.php">Tambah Pelajaran</a>
 <a href="../login/logout.php">Logout</a>

</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ Menu</span>

</form>
<div class="container" id="main">

    <table border = "1">
      <tr>
        <th>No.</th>
        <th>Kode</th>
        <th>Mata Pelajaran</th>
        <th>Waktu</th>
        <th>Semester</th>
        <th>Guru Pengajar</th>
        <th colspan="2">Aksi</th>
      </tr>
      </div>
    </body>
  </html>
      <?php
      if ($num > 0) {
       $no = 1;
       while ($data = mysqli_fetch_assoc($result)) {?>

         <tr>
           <td> <?php echo $no; ?></td>
           <td><?php echo $data['kode_mapel'] ?></td>
           <td><?php echo $data['mapel'] ?></td>
           <td><?php echo $data['alokasi_waktu'] ?></td>
           <td><?php echo $data['semester']; ?></td>
           <td><?php if ($data['nama_guru'] != NULL)
           {echo $data['nama_guru'];}
           else {echo "-";}
            ?>
          </td>
           <td><a href="form-update.php?kode_mapel=<?php echo $data['kode_mapel'];?>">Edit </a>

           </td>
<td>   <a href="delete.php?kode_mapel=<?php echo $data['kode_mapel'];?>"
     onclick="return confirm('Anda yakin ingin menghapus data ?')"> Hapus</a></td>
         </tr>

      <?php
      $no++;
      }
      }
      else {
       echo "<tr> <td colspan = '7'> Tidak ada data </td></tr>";
      }
       ?>

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
