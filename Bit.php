<?php
require_once 'Medida.php';
class Bit extends Medida{

    public function calcularByteABit(){
        return $this->getValor() * 8;
    } 
    public function calcularKilobyteABit(){
        return $this->getValor() * 8000;
    } 

    public function calcularKilobyteAByteABit(){
        return $this->getValor() * 1024 * 8;
    } 

    public function calcularMegabyteABit(){
        return $this->getValor() * 8000000;
    } 

    public function calcularMegabyteAKilobyteAByteABit(){
        return $this->getValor() * 1024 * 1024 * 8;
    }

    public function calcularGigabyteABit(){
        return $this->getValor() * 8000000000;
    }

    public function calcularGigabyteAMegabyteAKilobyteAByteABit(){
        return $this->getValor() * 1024 * 1024 * 1024 * 8;
    }

    public function calcularTerabyteABit(){
        return $this->getValor() * 8000000000000;
    }

    public function calcularTerabyteAGigabyteAMegabyteAKilobyteAByteABit(){
        return $this->getValor() * 1024 * 1024 * 1024 * 1024 * 8;
    }
}
?>