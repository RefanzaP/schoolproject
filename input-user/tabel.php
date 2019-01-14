<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table {
        border-collapse:collapse;
      }
      td {
        width: 40px;
        height: 20px;
      }
    </style>
  </head>
  <body>
    <form class="" action="" method="get">
      <p>
        <label for="baris">Masukkan Jumlah Baris:</label>
        <input type="text" name="baris" id="baris">
      </p>

        <p>
          <label for="kolom">Masukkan Jumlah Kolom:</label>
          <input type="text" name="kolom" id="kolom">
        </p>
        <p><input type="submit" name="kirim" value="Proses"></p>
    </form>
    <?php
    if (isset($_GET['kirim'])) {
      $baris = $_GET["baris"];
      $kolom = $_GET["kolom"];

      echo "<table border='1'>";

      for ($x=1; $x <= $baris ; $x++) {
      echo "<tr>";
          for ($y=1; $y <= $kolom ; $y++) {
            echo "<td> </td>";
          }
          echo "</tr>";
      }
      echo "</table>";
    }
     ?>
  </body>
</html>
