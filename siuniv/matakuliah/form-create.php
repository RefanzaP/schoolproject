<?php
session_start();
include '../connect.php';
$query = "SELECT id_dosen,nama_dosen FROM dosen";
$result = mysqli_query($connect,$query);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <style media="screen">
    html,body,h1,h2,p,ul{
      margin: 0;
      padding: 0;
    }

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
      .container input[type="password"]
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
      .container input[type="password"]:focus{
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
      h3{
        color: white;
        margin-left: 60px;
        font-size: 20px;
      }

    </style>

    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="../validasi.js">
    </script>
  </head>
  <body>
    <div class="header">

    </div>
<div class="container">
      <h3>Tambah Data Kuliah</h3>
<form class="" action="create.php" method="post">
  <table>
    <tr>
      <td><label for="kode">Kode</label></td>
      <td>:</td>
      <td><input type="text" name="kode" value="" id ="kode"></td>
    </tr>
    <tr>
      <td><label for="nama_matkul">Mata kuliah</label></td>
      <td>:</td>
      <td><input type="text" name="nama_matkul" value="" id ="nama_matkul"></td>
    </tr>
    <tr>
      <td><label for="sks">SKS</label></td>
      <td>:</td>
      <td><input type="text" name="sks" value="" id ="sks"></td>
    </tr>
    <tr>
      <td><label for="semester">Semester</label></td>
      <td>:</td>
      <td><input type="text" name="semester" value="" id ="semester"></td>
    </tr>
    <tr>
      <td><label for="id_dosen">Data Dosen</label></td>
      <td>:</td>
      <td><select class="" name="id_dosen" id="nama_dosen" >
        <option value="-">--Pilih Salah Satu--</option>

        <?php
        while ($data = mysqli_fetch_assoc($result)) {?>
          <option value="<?php echo $data['id_dosen']; ?>"><?php echo $data['nama_dosen'];?></option><?php
        }
         ?>
      </select></td>
    </tr>
    <tr>
      <td><input type="submit" name="btnSimpan" value="Simpan" onclick="return validasiMatkul()"></td>
    </tr>
  </table>


</form>
</div>
</body>
</html>
