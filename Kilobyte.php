<?php
require_once 'Medida.php';
class Kilobyte extends Medida{

    public function calcularBitAKilobyte(){
        return $this->getValor() / 8000;
    } 

    public function calcularBitAByteAKilobyte(){
        return $this->getValor() / 8 / 1024;
    } 

    public function calcularByteAKilobyte(){
        return $this->getValor() / 1000;
    } 

    public function calcularByteAKilobyteEquivalente(){
        return $this->getValor() / 1024;
    } 

    public function calcularMegabyteAKilobyte(){
        return $this->getValor() * 1000;
    } 

    public function calcularMegabyteAKilobyteEquivalente(){
        return $this->getValor() * 1024;
    } 

    public function calcularGigabyteAMegabyteAKilobyte(){
        return $this->getValor() * 1024 * 1024;
    }

    public function calcularTerabyteAKilobyte(){
        return $this->getValor() * 1000000000;
    }

    public function calcularTerabyteAGigabyteAMegabyteAKilobyte(){
        return $this->getValor() * 1024 * 1024 * 1024;
    }
}
?>