
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
        margin-left: 40%;
        margin-top: 17%;
      }
      h2{
      margin-left: 3%;
      }
      #subm {
        margin-left: 11%;

      }
    </style>
  </head>
  <body>
    <div class="create">
      <h2>Tambah Data Dosen</h2>
      <form class="" action="create.php" method="post">
        <p>
          nama dosen :<input type="text" name="nama_dosen" value="">
        </p>
        <p>
          no telp : <input type="text" name="telp" value="">
        </p>
        <input type="submit" name="btnSimpan" value="Simpan" id="simpan">
        <p> <a href="read.php">back</a></p>
      </form>
    </div>

  </body>
</html>
