<?php
session_start();
if(!(isset($_SESSION['user'])))
{
  header("location:../login/form-login.php");
}
include '../connect.php';

$query = "SELECT kode_guru,nama_guru FROM t_guru";
$result= mysqli_query($connect,$query);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
     body{
       background-size: cover;
       font-family: verdana;
       margin-left: 40%;
       margin-top: 18%;
           background-image: url(color.jpg);
     }
     .container{
       background-color: black;
       top: 50%;
       left:50%;
       width : 350px;
       height : 500px;
       padding: 80px 40px;
       transform: translate(-50%,-50%);
       border-radius: 75px 25px;
       position: absolute;
       box-sizing: border-box;
       background: rgba(0,0,0,.5);

     }

     .container p{
       margin: 0;
       padding:0;
       font-weight: bold;
       color: #fff;
     }
     .container input[type="text"],
     .container input[type="password"]{
       border:none;
       border-bottom:1px solid #fff;
       border-radius: 5px;
       transition: 0.3s;
       background: transparent;
       outline: none;
       height: 40px;
       color: #c3c9c9;
       font-size: 16px;
     }
     .container input[type="text"]:focus,
     .container input[type="password"]:focus{
       border-color: #909090;
     }
     .container input[type="submit"]{
       border : none;
       outline : none;
       background : white;
       color : black;
       height: 40px;
       font-size: 16px;
       border-radius: 25px ;
       margin-top: 15px;
       cursor : pointer;
       -webkit-transition-duration:0.4s;
       transition-duration: 0.4s;
       width: 300%;
       opacity: 1;
     }
     label{
       color: white;
     }
     h3{
       color: white;
       margin-left: 60px;
       font-size: 20px;
     }

     </style>
   </head>
   <body>
     <div class="container">
           <h3>TAMBAH MATA PELAJARAN</h3>
     <form class="" action="create.php" method="post">
       <table>
         <tr>
           <td><label for="kode_mapel">Kode Mapel</label></td>
           <td>:</td>
           <td><input type="text" name="kode_mapel" value="" id ="kode_mapel"></td>
         </tr>
         <tr>
           <td><label for="mapel">Mapel</label></td>
           <td>:</td>
           <td><input type="text" name="mapel" value="" id ="mapel"></td>
         </tr>
         <tr>
           <td><label for="alokasi_waktu">Alokasi Waktu</label></td>
           <td>:</td>
           <td><input type="text" name="alokasi_waktu" value="" id ="alokasi_waktu"></td>
         </tr>
         <tr>
           <td><label for="semester" >Semester</label></td>
           <td>:</td>
           <td><input type="text" name="semester" value="" id ="semester"></td>
         </tr>
         <tr>
           <td><label for="kode_guru">Data Guru</label></td>
           <td>:</td>
           <td><select class="" name="kode_guru" id="nama_guru" >
             <option value="-">--Pilih Salah Satu--</option>

             <?php
             while ($data = mysqli_fetch_assoc($result)) {?>
               <option value="<?php echo $data['kode_guru']; ?>"><?php echo $data['nama_guru'];?></option><?php
             }
              ?>
           </select></td>
         </tr>
         <tr>
           <td><input type="submit" name="btnSimpan" value="Simpan" onclick="return validasiMatkul()"></td>
         </tr>
       </table>
   </body>
 </html>
