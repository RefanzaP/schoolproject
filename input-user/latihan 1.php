<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="form">
      <form action="" method="post">
        <h3>
        Masukkan Data Diri anda
      </h3>
      <p>
         <label for="namaAnda">Nama</label>
         <input type="text" name="nama" id="namaAnda">
      </p>
      <p>
         <label for="umurAnda">Umur</label>
         <input type="text" name="umur" id="umurAnda">
      </p>
      <p>
        <input type="submit" name="kirim" value="Proses">
      </p>
      </form>
      <?php
      if(isset($_POST['kirim'])){
      echo "Nama : " . $_POST["nama"] ."<br>";
      echo "Umur : " . $_POST["umur"] ."<br>";
      }
      ?>
    </div>
  </body>
  </html>
