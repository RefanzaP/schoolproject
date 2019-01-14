<?php

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <script type="text/javascript" src="../validasi.js">

     </script>
     <style media="screen">
     html,body,h1,h2,p,ul{
       margin: 0;
       padding: 0;
     }

     body{
       background-size: cover;
       font-family: verdana;
       margin-top: 18%;
       margin-left: 40%;
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
       .container td{
         margin: 0;
         padding:0;
         font-weight: bold;
         color: #fff;
       }
       .container input {
         width: 100%;
         margin-bottom: 5px;

       }
       .container input[type="text"],
       .container input[type="number"]
       {
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
       .container input[type="number"]:focus{
         border-color: #909090;
       }
       ::placeholder{
         color: rgba(255, 255, 255,.5);
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
         width: 80%;
         opacity: 1;
       }
       h2,h3{
         color: white;
         margin-left: 60px;
         font-size: 20px;
       }

     </style>
   </head>
   <body>
     <div class="container">
     <form class="" action="create.php" method="post">
       <table>
       <h2>TAMBAH DATA PENGAJAR</h2>
       <tr>
         <td><label for="nama_guru">Nama Guru</label></td>
         <td>:</td>
         <td><input type="text" name="nama_guru" value="" id ="nama"></td>
       </tr>
       <tr>
         <td><label for="jumlah_jam">jumlah jam</label></td>
         <td>:</td>
         <td><input type="text" name="jumlah_jam" value="" id ="jumlah_jam"></td>
       </tr>
       <tr>
         <td><label for="alamat">Alamat</label></td>
         <td>:</td>
         <td><input type="text" name="alamat" value="" id ="alamat"></td>
       </tr>
       <tr>
         <td><label for="telp">Telephon</label></td>
         <td>:</td>
         <td><input type="text" name="telp" value="" id ="telp"></td>
       </tr>
       <tr>
         <td><label for="email">email</label></td>
         <td>:</td>
         <td><input type="text" name="email" value="" id ="email"></td>
       </tr>
       <td><input type="submit" name="btnSimpan" value="Simpan" id="simpan" onclick="return myCreate()"></td>
       <td><a href="read.php">back</a><td>
</table>
     </form>
     </div>
   </body>
 </html>
