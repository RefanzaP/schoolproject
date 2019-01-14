<?php
session_start();
if (!(isset($_GET['kode_mapel']))) {
  header("location: ../login/login.php");
}
  include '../connect.php';
$kode_mapel = $_GET['kode_mapel'];

$query = "SELECT kode_mapel, mapel, alokasi_waktu, semester, t_mapel.kode_guru,nama_guru
          FROM t_mapel LEFT JOIN t_guru USING (kode_guru)
          WHERE kode_mapel = '$kode_mapel'";
$result = mysqli_query($connect,$query);
$data_mapel = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
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
  </head>
  <body>
    <div class="container">

    <form class="container" action="update.php" method="post">
      <table>
        <p><input type="hidden" name="kode_mapel" value="<?php echo $data_mapel['kode_mapel']; ?>">
        </p>
        <tr>
          <td><label for="mapel">Mapel</label></td>
          <td>:</td>
          <td><input type="text" name="mapel"  id ="mapel" value="<?php echo $data_mapel['mapel']; ?>"></td>
        </tr>
        <tr>
          <td><label for="alokasi_waktu">Alokasi Waktu</label></td>
          <td>:</td>
          <td><input type="text" name="alokasi_waktu" id ="alokasi_waktu" value="<?php echo $data_mapel['alokasi_waktu']; ?>"></td>
        </tr>
        <tr>
          <td><label for="semester">Semester</label></td>
          <td>:</td>
          <td><input type="text" name="semester"  id ="semester" value="<?php echo $data_mapel['semester']; ?>"></td>
        </tr>
        <tr>
          <td><label for="">Nama Guru</label></td><td> : </td>
          <td><select id="kode_guru" name="kode_guru">
            <option value="-">--Pilih salah satu--</option>
            <?php
            $query2 = "SELECT kode_guru,nama_guru FROM t_guru";
            $result2 = mysqli_query($connect,$query2);
            while ($data = mysqli_fetch_assoc($result2)) {?>
              <option value="<?php echo $data ['kode_guru'];?>"><?php echo $data['nama_guru']; ?><?php if ($data_mapel['kode_guru'] == $data['kode_guru']) {
                echo " selected";
              } ?></option><?php   } ?>

          </select>
          </td>
        </tr>
        <tr>
          <td><input type="submit" name="btnSimpan" value="Simpan" onclick="return validasiMatkul()"></td>
        </tr>
      </table>
  </body>
</html>
