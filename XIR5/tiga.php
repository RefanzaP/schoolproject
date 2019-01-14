<?php 
class orang {
 public $nama;
    function set_nama($nama){
$this->name = $nama;}
    function get_nama(){ return $this->nama;}
}
$orangPertama = new orang();
$orangPertama->nama='joko permana';
echo $orangPertama->get_nama();
?>