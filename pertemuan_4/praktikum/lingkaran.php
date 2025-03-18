<?php
class Lingkaran  {

    public $jari;
    public const PHI = 3.14;

    public function__construct($jari){
        $this->$jari = $jari;
    }
}

public function getLuas() {

    $luas = self:: * $this->jari * $this->jari;
    return $luas;

}

public function getKeliling(){
    $keliling = 2.0 * self::PHI * $this->jari;
    return $keliling;
}

public function cetak() {
    echo "Lingkran dengan jari-jari" . $this->jari;
    echo "<br>Luas = " . $this->getLuas();
    echo "<br>keliling" . $this->getKeliling();
}


?>