<?php
require_once 'Medida.php';
class Gigabyte extends Medida{

    public function calcularBitAGigabyte(){
        return $this->getValor() / 8000000000;
    } 

    public function calcularBitAByteAKilobyteAMegabyteAGigabyte(){
        return $this->getValor() / 8 / 1024 / 1024 / 1024;
    } 

    public function calcularByteAGigabyte(){
        return $this->getValor() / 1000000000;
    } 

    public function calcularByteAKilobyteAMegabyteAGigabyte(){
        return $this->getValor() / 1024 / 1024 / 1024;
    }

    public function calcularKilobyteAGigabyte(){
        return $this->getValor() / 1000000;
    } 

    public function calcularKilobyteAMegabyteAGigabyte(){
        return $this->getValor() / 1024 / 1024;
    }

    public function calcularMegabyteAGigabyte(){
        return $this->getValor() / 1000;
    }

    public function calcularAMegabyteAGigabyteEqui(){
        return $this->getValor() / 1024;
    }

    public function calcularTerabyteAGigabyte(){
        return $this->getValor() * 1000;
    }

    public function calcularTerabyteAGigabyteEqui(){
        return $this->getValor() * 1024;
    }
}
?>