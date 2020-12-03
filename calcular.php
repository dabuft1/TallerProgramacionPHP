<?php
if(isset($_POST["btncalcular"])){

    require_once 'Terabyte.php';
    require_once 'Gigabyte.php';
    require_once 'Megabyte.php';
    require_once 'Kilobyte.php';
    require_once 'Byte.php';
    require_once 'Bit.php';

    $terabyte = new Terabyte();
    $gigabite = new Gigabyte();
    $megabyte = new Megabyte();
    $kilobyte = new Kilobyte();
    $byte = new Byte();
    $bit = new Bit();

    $medida = $_POST["txtvalor"];

    $opcion = $_POST["medidas"];
    $tipomedida = $_POST["selmedidas"];
    
    switch($opcion){

        case "bit": 
            $bit->setValor($medida);
            switch($tipomedida){

                case "byte":
                    echo "La conversión de byte a bit es: " . $bit->calcularByteABit();
                break;
                case "kilo":
                    echo "La conversión de kilobyte a bit es: " . $bit->calcularKilobyteAByteABit();
                break;
                case "mega":
                    echo "La conversión de megabyte a bit es: " . $bit->calcularMegabyteAKilobyteAByteABit();
                break;
                case "giga";
                    echo "La conversión de gigabyte a bit es: " . $bit->calcularGigabyteAMegabyteAKilobyteAByteABit();
                break;
                case "tera";
                    echo "La conversión de terabyte a bit es: " . $bit->calcularTerabyteAGigabyteAMegabyteAKilobyteAByteABit();

                break;
                default:
                echo "NO SE PUEDE CALCULAR";
                }
                break;


        case "byte": 
            $byte->setValor($medida);
            switch($tipomedida){
                case "bit":
                    echo "La conversión de bit a byte es: " . $byte->calcularBitAByte();
                break;
                case "kilo":
                    echo "La conversión de kilobyte a byte es: " . $byte->calcularKilobyteAByteEquivalente();
                break;
                case "mega":
                    echo "La conversión de megabyte a byte es: " . $byte->calcularMegabyteAKilobyteAByte();
                break;
                case "giga";
                    echo "La conversión de gigabyte a byte es: " . $byte->calcularGigabyteAMegabyteAKilobyteAByte();
                break;
                case "tera";
                    echo "La conversión de terabyte a byte es: " . $byte->calcularTerabyteAGigabyteAMegabyteAKilobyteAByte();

                break;
                default:
                echo "NO SE PUEDE CALCULAR";
                }
                break;

                case "kilobyte":
                    $kilobyte->setValor($medida);

                    switch($tipomedida){
                        case "bit":
                            echo "La conversión de bit a kilobyte es: " . $kilobyte->calcularBitAByteAKilobyte();
                        break;
                        case "byte":
                            echo "La conversión de byte a kilobyte es: " . $kilobyte->calcularByteAKilobyteEquivalente();
                        break;
                        case "mega":
                            echo "La conversión de megabyte a kilobyte es: " . $kilobyte->calcularMegabyteAKilobyteEquivalente();
                        break;
                        case "giga";
                            echo "La conversión de gigabyte a kilobyte es: " . $kilobyte-> calcularGigabyteAMegabyteAKilobyte();
                        break;
                        case "tera";
                            echo "La conversión de terabyte a kilobyte es: " . $kilobyte->calcularTerabyteAGigabyteAMegabyteAKilobyte();
        
                        break;
                        default:
                        echo "NO SE PUEDE CALCULAR";
                        }
                        break;

                        case "megabyte":
                            $megabyte->setValor($medida);

                            switch($tipomedida){
                                case "bit":
                                    echo "La conversión de bit a megabyte es: " . $megabyte->calcularBitAByteAKilobyteAMegabyte();
                                break;
                                case "byte":
                                    echo "La conversión de byte a megabyte es: " . $megabyte->calcularByteAKilobyteAMegabyte();
                                break;
                                case "kilo":
                                    echo "La conversión de kilobyte a megabyte es: " . $megabyte->calcularKilobyteAMegabyteEqui();
                                break;
                                case "giga";
                                    echo "La conversión de gigabyte a megabyte es: " . $megabyte->calcularGigabyteAMegabyteEqui();
                                break;
                                case "tera";
                                    echo "La conversión de terabyte a megabyte es: " . $megabyte->calcularTerabyteAGigabyteAMegabyte();
                
                                break;
                                default:
                                echo "NO SE PUEDE CALCULAR";
                                }
                                break;
                                
                                case "gigabyte":
                                    $gigabite->setValor($medida);

                                    switch($tipomedida){
                                        case "bit":
                                            echo "La conversión de bit a gigabyte es: " . $gigabite->calcularBitAByteAKilobyteAMegabyteAGigabyte();
                                        break;
                                        case "byte":
                                            echo "La conversión de byte a gigabyte es: " . $gigabite->calcularByteAKilobyteAMegabyteAGigabyte();
                                        break;
                                        case "kilo":
                                            echo "La conversión de kilobyte a gigabyte es: " . $gigabite->calcularKilobyteAMegabyteAGigabyte();
                                        break;
                                        case "mega";
                                            echo "La conversión de megabyte a gigabyte es: " . $gigabite->calcularAMegabyteAGigabyteEqui();
                                        break;
                                        case "tera";
                                            echo "La conversión de terabyte a gigabyte es: " . $gigabite->calcularTerabyteAGigabyteEqui();
                        
                                        break;
                                        default:
                                        echo "NO SE PUEDE CALCULAR";
                                        }
                                        break;

                                        case "terabyte":
                                            $terabyte->setValor($medida);

                                            switch($tipomedida){
                                                case "bit":
                                                    echo "La conversión de bit a terabyte es: " . $terabyte->calcularBitAByteAKilobyteAMegabyteAGigabyteATerabyte();
                                                break;
                                                case "byte":
                                                    echo "La conversión de byte a terabyte es: " . $terabyte->calcularByteAKilobyteAMegabyteAGigabyteATerabyte();
                                                break;
                                                case "kilo":
                                                    echo "La conversión de kilobyte a terabyte es: " . $terabyte->calcularKilobyteAMegabyteAGigabyteATerabyte();
                                                break;
                                                case "mega";
                                                    echo "La conversión de megabyte a terabyte es: " . $terabyte->calcularMegabyteAGigabyteATerabyte();
                                                break;
                                                case "giga";
                                                    echo "La conversión de gigabyte a terabyte es: " . $terabyte->calcularGigabyteATerabyteEqui();
                                
                                                break;
                                                default:
                                                echo "NO SE PUEDE CALCULAR";
                                                }
                                                break;
                                                default: 
                                                echo "Opción invalida";

    }

}else{
    echo "Acceso no permitido.";
}

?>