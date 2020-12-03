<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion Unidad De Medida</title>
</head>
<body>
    
    <h1>Conversos de medidas</h1>
    <p>Ingresa una medida y luego selecciona la medida de destino</p>
    <br>
    <form name="form1" method="POST" action="calcular.php">
        <p>Valor a convertir: <input type="text" id="txtvalor" name="txtvalor">
        <select name="selmedidas">
            <option value="">Selecione..</option>
            <option value="bit">Bit</option>
            <option value="byte">Byte</option>
            <option value="kilo">Kilobyte</option>
            <option value="mega">Megabyte</option>
            <option value="giga">Gigabyte</option>
            <option value="tera">Terabyte</option>
        </select> 
        </p>
        <p>Convertir a la unidad de medida de: 
        </p>
            <input type="radio" name="medidas" value="bit">Bit
            <br><input type="radio" name="medidas" value="byte">Byte
            <br><input type="radio" name="medidas" value="kilobyte">Kilobyte
            <br><input type="radio" name="medidas" value="megabyte">Megabyte
            <br><input type="radio" name="medidas" value="gigabyte">Gigabyte
            <br><input type="radio" name="medidas" value="terabyte">Terabyte
        </p>
        <p><input type="submit" name="btncalcular" value="Calcular"></p>
    </form>

</body>
</html>