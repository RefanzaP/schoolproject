<?php 
    class robotDua {
    public $suara;
    public $berat;
    public function bersuara(){
        return $this->suara; }
    
    public function set_suara($olik){
        $this->suara = $olik;

    }
    public function berat_robot(){
        return $this->berat;
    } 
      public function set_berat($bunyi){
        $this->berat = $bunyi;
  }
  
    }
    $robocop = new robotDua;
    $robocop -> bersuara();
    $robocop ->set_suara(' beep');
    echo "Suaranya".$robocop ->bersuara();
    $robocop ->set_berat(' 20 '); 
    echo " berat ".$robocop->berat_robot()." kilo";
?>