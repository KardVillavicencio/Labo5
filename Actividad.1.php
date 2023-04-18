<!DOCTYPE html>
<html>
<head>
    <title>Estructura 01 -Operacion con PHP</title>
</head>
<body>
    <form method="post" action="">
    Ingresar Valor 1:<br> <input type="text" name="Valor1"><br>
    Ingresar Valor 2:<br> <input type="text" name="Valor2"><br>
    Resultado:<br>
    <input type="submit" name="Suma" value="Suma">
    </form>
<?php
    $numero1=$_POST['Valor1'];
    $numero2=$_POST['Valor2'];
        $Suma=$numero1 + $numero2;
        echo "El Resultado de la suma es:" .$Suma;
?>
</body>
</html>

