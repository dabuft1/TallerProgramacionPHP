<?php
require_once 'Medida.php';
class Byte extends Medida{

    public function calcularBitAByte(){
        return $this->getValor() / 8;
    } 

    public function calcularKilobyteAByte(){
        return $this->getValor() * 1000;
    } 

    public function calcularKilobyteAByteEquivalente(){
        return $this->getValor() * 1024;
    }

    public function calcularMegabyteAByte(){
        return $this->getValor() * 1000000;
    } 

    public function calcularMegabyteAKilobyteAByte(){
        return $this->getValor() * 1024 * 1024;
    }

    public function calcularGigabyteAByte(){
        return $this->getValor() * 1000000000;
    }

    public function calcularGigabyteAMegabyteAKilobyteAByte(){
        return $this->getValor() * 1024 * 1024 * 1024;
    }

    public function calcularTerabyteAByte(){
        return $this->getValor() * 1000000000000;
    }

    public function calcularTerabyteAGigabyteAMegabyteAKilobyteAByte(){
        return $this->getValor() * 1024 * 1024 * 1024 * 1024;
    }
}
?>