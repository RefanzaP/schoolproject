<html>
<head>
  <title>Kalkulator dengan PHP</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  h1{
      text-shadow: 2px 2px red;
    }
    .tombol{
      cursor: pointer;
    }
    .tombol:hover{
      background-color: #3366ff;
      box-shadow: 4px 4px red;
    }
    .txt:hover{
      background-color: 	 #e0e0d1;
      box-shadow: 2px 2px #4dffff;
    }
    body{
      background-image: url("b.jpg");
    }
    .kalkulator{
      background-color: #ff9966;
      box-shadow: 2px 2px red;
    }

  </style>
</head>
<body>
  <?php
    if(isset($_POST['hitung'])){
      $txt1 = $_POST['txt1'];
      $txt2 = $_POST['txt2'];
      $operator = $_POST['operator'];
      switch ($operator) {
        case 'tambah':
        $hasil = $txt1+$txt2;
        break; case 'kurang':
        $hasil = $txt1-$txt2;
        break; case 'kali':
        $hasil = $txt1*$txt2;
        break; case 'bagi':
        $hasil = $txt1/$txt2;
        break;
      }
    }
  ?>
  <div class="kalkulator">
    <h1 class="judul">KALKULATOR</h1>
    <form method="post" action="index.php">
      <input type="text" name="txt1" class="txt" placeholder="Inputkan Angka ...">
      <input type="text" name="txt2" class="txt" placeholder="Inputkan Angka ...">
      <select class="operator" name="operator">
        <option value="tambah"> + </option>
        <option value="kurang"> - </option>
        <option value="kali"> * </option>
        <option value="bagi"> / </option>
      </select>
      <input type="submit" name="hitung" value="HITUNG" class="tombol">
      <input type="submit" name="reset" value="RESET" class="tombol">
    </form>

      <?php if(isset($_POST['hitung'])){ ?>
          <input type="text" value="<?php echo $hasil; ?>" class="txt">
      <?php }else{ ?>

<?php } ?>
</div>
</body>
</html>
