<html lang="en" dir="ltr">
  <head>

    <style media="screen">

      body{
        background-size: cover;
        font-family: verdana;

            background-image: url(login/color.jpg);
      }
      .container{
        background-color: black;
        top: 50%;
        left:50%;
        width : 350px;
        height : 400px;
        padding:90px 40px;
        transform: translate(-50%,-50%);
        border-radius: 15px 70px;
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
        margin-left:10px;
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
        border-radius: 25px 45px;
        margin-top: 10px;
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
        margin-top:-15px;
      }
    </style>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <div class="container">
      <div class="">
        <form class="form" action="" method="post">
        <h3>DAFTAR ADMIN</h3>
        <p>
            <label>Username</label>
            <input type="text" name="username" id="username"  >
          </p>
          <p>
            <label>Password</label>
            <input type="password" name="password" id="password">
          </p>

          <p>
            <input type="submit" name="daftar" value="Daftar" onclick="validate()">
          </p>
        </form>
        <?php
        if (isset($_POST['daftar'])) {
          include 'connect.php';
          $insert =mysqli_query($connect,"INSERT INTO t_user VALUES(NULL,'".$_POST['username']."',
          '".$_POST['password']."')");

          if ($insert < 0) {
            echo "Gagal daftar";
          }
          else {
            echo "berhasil daftar";
          }
          echo "<a href='login/form-login.php'> Login</a> ";
        }
       ?>

      </div>
    </div>
  </body>
</html>
