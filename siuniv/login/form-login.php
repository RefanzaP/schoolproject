<?php
 ?>
<html>
  <head>
    <script type="text/javascript" src="../validasi.js">

    </script>
    <style media="screen">
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
      .poto{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
        position: absolute;
        top: calc(-100px/2);
        left: calc(50% - 50px);
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
  </head>
  <body>

    <div class="container">
      <img src="user (1).png" alt="mbotenenten" class="poto">

    <form class="" action="login.php" method="post">
      <h3>Badhe Login?</h3>
      <p>Jeneng celukan    : <input type="text" name="username" value="" id="username" placeholder="Masukkan username"></p>
      <p>kata sandi   : <input type="password" name="password" value="" id="password"placeholder="Masukkan password"></p>
      <p><input type="checkbox" name="" onclick="myFunction()">Show Password</p>
      <input type="submit" name="" value="Login now"  onclick="return validasiLogin()">
      <p style="margin-top:20px;">Dereng nggadhah akun?<a href="../daftar.php">Daftar</a> </p>
</div>
  </body>
</html>
<script type="text/javascript">
  function myFunction(){
    var x = document.getElementById("password");
    if (x.type === "password") {
 x.type = "text";
}else {
  x.type = "password";
}
  }
</script>
