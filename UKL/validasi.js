/* form login */
function validasiLogin(){
  var username = document.getElementById('username');
  var password = document.getElementById('password');

  if (username.value == "") {
    alert("anda belum mengisi username");
    username.focus();
    return false;
  }
  else if (password.value == "") {
    alert("anda belum mengisi password");
    password.focus();
    return false;
  }
  else {
    return true;
  }
}
function validate(){

   if(!document.getElementById("password").value==document.getElementById("confirm_password").value)alert("Passwords do no match");
   return document.getElementById("password").value==document.getElementById("confirm_password").value;
  return false;
   }
   /* form create */
function myCreate(){
  var nama = document.getElementById('nama');
  var jumlah_jam = document.getElementById('jumlah_jam');
  var alamat = document.getElementById('alamat');
  var telp = document.getElementById('telp');
  var email = document.getElementById('email');

  if (nama.value == "") {
    alert("Anda Belum Mengisi Nama pengajar!");
    nama.focus();
    return false;
  }
  else if (jumlah_jam.value == "") {
    alert("Anda Belum Mengisi Total Jam Mengajar!");
    jumlah_jam.focus();
    return false;
  }
  else if (alamat.value == "") {
    alert("Anda Belum Mengisi alamat!");
    alamat.focus();
    return false;
  }
  else if (telp.value == "") {
    alert("Anda Belum Mengisi Nomer Telp");
    telp.focus();
    return false;
  }
  else if (email.value == "") {
    alert("Anda Belum Mengisi Email Pengajar!");
    email.focus();
    return false;
  }
  else {
    return true;
  }
}
