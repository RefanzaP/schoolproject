<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (isset($_POST["hitung"])) {
      $bil1 = $_POST["bil1"];
      $bil2 = $_POST["bil2"];
      $opr  = $_POST["opr"];

      if ($opr == '+') {
        $hasil = $bil1 + $bil2;

      }
      else if ($opr == '-') {
        $hasil = $bil1 - $bil2;

      }
      else if ($opr == 'x') {
        $hasil = $bil1 * $bil2;

      }
      else {
        $hasil = $bil1 / $bil2;

      }
    }


     ?>
    <form class="" action="" method="post">
      <p>
         <input type="text" name="bil1" placeholder="Masukkan Bilangan 1">
      </p>
      <p>
         <input type="text" name="bil2" placeholder="Masukkan Bilangan 2">
      </p>
      <p id="operasi">
        <select class="" name="opr">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="x">x</option>
          <option value=":">:</option>

        </select>
        <input type="submit" name="hitung" id="hitung" value=" = ">
      </p>
      <p>
        <input type="text" name="hasil" placeholder="Hasil" value=" <?php if(isset($hasil)){echo $hasil;} ?>">
      </p>
    </form>

  </body>
</html>
