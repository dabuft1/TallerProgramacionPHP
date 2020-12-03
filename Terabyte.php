<?php
require_once 'Medida.php';
class Terabyte extends Medida{

    public function calcularBitATerabyte(){
        return $this->getValor() / 8000000000000;
    }

    public function calcularBitAByteAKilobyteAMegabyteAGigabyteATerabyte(){
        return $this->getValor() / 8 / 1024 / 1024 / 1024 / 1024;
    } 

    public function calcularByteATerabyte(){
        return $this->getValor() / 1000000000000;
    } 

    public function calcularByteAKilobyteAMegabyteAGigabyteATerabyte(){
        return $this->getValor() / 1024 / 1024 / 1024 / 1024;
    } 

    public function calcularKilobyteATerabyte(){
        return $this->getValor() / 1000000000;
    } 

    public function calcularKilobyteAMegabyteAGigabyteATerabyte(){
        return $this->getValor() / 1024 / 1024 / 1024;
    } 

    public function calcularMegabyteATerabyte(){
        return $this->getValor() / 1000000;
    }

    public function calcularMegabyteAGigabyteATerabyte(){
        return $this->getValor() / 1024 / 1024;
    } 

    public function calcularGigabyteATerabyte(){
        return $this->getValor() / 1000;
    }

    public function calcularGigabyteATerabyteEqui(){
        return $this->getValor() / 1024;
    } 
}
?>