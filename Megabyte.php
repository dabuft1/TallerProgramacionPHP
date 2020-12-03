<?php
require_once 'Medida.php';
class Megabyte extends Medida{

    public function calcularBitAMegabyte(){
        return $this->getValor() / 8000000;
    } 

    public function calcularBitAByteAKilobyteAMegabyte(){
        return $this->getValor() / 8 / 1024 / 1024;
    } 

    public function calcularByteAMegabyte(){
        return $this->getValor() / 1000000;
    } 

    public function calcularByteAKilobyteAMegabyte(){
        return $this->getValor() / 1024 / 1024;
    }

    public function calcularKilobyteAMegabyte(){
        return $this->getValor() / 1000;
    } 

    public function calcularKilobyteAMegabyteEqui(){
        return $this->getValor() / 1024;
    }

    public function calcularGigabyteAMegabyte(){
        return $this->getValor() * 1000;
    }
    public function calcularGigabyteAMegabyteEqui(){
        return $this->getValor() * 1024;
    }

    public function calcularTerabyteAMegabyte(){
        return $this->getValor() * 1000000;
    }

    public function calcularTerabyteAGigabyteAMegabyte(){
        return $this->getValor() * 1024 * 1024;
    }
}
?>