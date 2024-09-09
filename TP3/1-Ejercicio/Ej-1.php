<?php
/* 
  Ejercicio Nº 1: Desarrollar una pagina que permita ingresar dos números enteros y enviar 
dichos valores a una segunda página que muestre por pantalla el valor de las variables 
ingresadas y una tabla con la suma, la resta y la multiplicación y el resto de dividir ambas 
variables
*/

$num1 = $_POST['fNum1'];
$num2 = $_POST['fNum2'];

echo 'Number 1: ' . $num1 . '</br>';
echo 'Number 2: ' . $num2 . '</br>';
echo 'Number 1 + Number 2: ' . $num1 + $num2 . '</br>';
echo 'Number 1 - Number 2: ' . $num1 - $num2 . '</br>';
echo 'Number 1 % Number 2: ' . $num1 % $num2 . '</br>';
?>