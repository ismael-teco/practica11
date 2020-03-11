<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica 11-variables</title>
</head>
<body>
    <h1>VARIABLE</h1>
<?php
$nombre='Ismael teco medina';
$edad=20; //escribe tu edad
$beca=3000000500;
$estatus=true;
echo "Tipos de variable <br>";
echo $nombre.'<br>';
echo $edad.'<br>';
echo $beca.'<br>';
echo $estatus.'<br>';
echo $nombre. '&nbsp Tiene &nbsp '.$edad. ' &nbsp años de edad y gana &nbsp'. $beca.'<br/>';


?>
<h1>
operadores aritmeticos
</h1>


<?php
$numero1=10;
$numero2=5;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

echo 'la suma es= &nbsp '.$suma.'<br>';
echo 'la resta es= &nbsp '.$resta.'<br>';
echo 'la multiplicacion es= &nbsp '.$multiplicacion.'<br>';
echo 'la division es = &nbsp '.$division.'<br>';
echo 'el incremento de suma es = &nbsp '.$suma++.'<br>';
echo 'el decremento de suma es = &nbsp '.$suma--.'<br>';
echo 'el reciduo es = &nbsp '.$numero1%$numero2.'<br>';

?>




</body>
</html>