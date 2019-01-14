<?php
session_start();
if(!(isset($_SESSION['user'])))
{
  header("location:../login/form-login.php");
}
include '../connect.php';

$kode_guru = $_GET['kode_guru'];

$query = "SELECT * FROM t_guru WHERE kode_guru = $kode_guru";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript" src="../validasi.js">

    </script>
    <meta charset="utf-8">
    <title>Edit Data</title>
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
      h3{
        color: white;
        margin-left: 60px;
        font-size: 20px;
      }

    </style>
  </head>
  <body>
    <div class="container">
        <form  action="update.php" method="post">
      <table>
        <tr>
          <td><label for="nama"> Nama Guru </label></td>
          <td>:</td>
          <td><input type="text"name="nama_guru"id="nama" value="<?php echo $row ['nama_guru'];?>"></td>
        </tr>
        <tr>
          <td><label for="jumlah_jam"> Jumlah Jam </label></td>
          <td>:</td>
          <td><input type="text"name="jumlah_jam"id="jumlah_jam"value="<?php echo $row ['jumlah_jam'];?>"></td>
        </tr>
        <tr>
          <td><label for="alamat"> Alamat </label></td>
          <td>:</td>
          <td><input type="text"name="alamat"id="alamat"value="<?php echo $row ['alamat'];?>"></td>
        </tr>
        <tr>
          <td><label for="telp"> Telp </label></td>
          <td>:</td>
          <td><input type="text"name="telp"id="telp"value="<?php echo $row ['telp'];?>"></td>
        </tr>
        <tr>
          <td><label for="email"> Email </label></td>
          <td>:</td>
          <td><input type="text"name="email"id="email"value="<?php echo $row ['email'];?>"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="hidden"name="kode_guru"value="<?php echo $row ['kode_guru'];?>"></td>
          <td><input type="submit" value="Simpan"name="btnSimpan" onclick="myUpdate()"></td>
        </tr>
      </table>
    </form>
  </div>
  </body>
</html>
