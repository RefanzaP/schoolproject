function validasiMatkul() {
  var kode = document.getElementById('kode');
  var nama_matkul = document.getElementById('nama_matkul');
  var sks = document.getElementById('sks');
  var semester = document.getElementById('semester');
  var id_dosen = document.getElementById('id_dosen');

  if (kode.value == "") {
    alert("Anda belum mengisi kode matkul!!!")
    kode.focus();
    return false;
  }
  else if (nama_matkul.value == "") {
    alert("Anda belum mengisi  matkul!!!")
    nama_matkul.focus();
    return false;
  }
  else if (sks.value == "") {
    alert("Anda belum mengisi sks !!!")
    sks.focus();
    return false;
  }
  else if (semester.value == "") {
    alert("Anda belum mengisi semester!!!")
    semester.focus();
    return false;
  }
  else if (id_dosen.value == "") {
    alert("Anda belum mengisi id dosen!!!")
    id_dosen.focus();
    return false;
  }
  else {
    return true;
  }
}
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
