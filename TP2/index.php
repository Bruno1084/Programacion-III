<?php

// Ejercicio 1
$a = 15;
$b = 94;
$c = 73;

$max = 0;

if($a < $b){
  $max = $b;

  if($b < $c){
    $max = $c;
  }
} else if ($a < $c) {
  $max = $c;
} else {
  $max = $a;
}
echo "$max \n";


//Ejercicio 2
$cadena1 = 'cuidado';
$cadena2 = 'perro';
$cadena3 = 'muerde';

echo "$cadena1 $cadena2 $cadena3 \n";


// Ejercicio 3
/* 
<?php
  $x = -1;
  $y = 9;
  $suma = x + y;     ==> Los caracteres $x y $y no refieren a ninguna variable al no tener el símbolo "$";
  print("El valor de x es <i>$x<i>")  ==> La etiqueta <i></i> no está correctamente cerrada;
  <br />
  print("El valor de y es <i>$y</i><br />"; ==> Print imprime de manera literal todo en vez de las variables y etiquetas a las que se refiere;
  print("La suma es <b><i>$suma</i></b><br />")
?>;
*/


// Ejercicio 4
$var1 = 14;
$var2 = 17;
$var3 = 18;
$var4 = 134;

if($var1 >= 18){
  echo "Mayor a 18 \n";
} else {
  echo "Menor a 18 \n";
}

if($var2 >= 18){
  echo "Mayor a 18 \n";
} else {
  echo "Menor a 18 \n";
}

if($var4 >= 18){
  echo "Mayor a 18 \n";
} else {
  echo "Menor a 18 \n";
}

// Ejercicio 5
$loop = 3;
for($i = 0; $i < $loop; $i++) {
  echo "<ul>Etiqueta For $i </ul> \n";
}

while($j < $loop){
  echo "<ul>Etiqueta While $i </ul> \n";

  $j++;
}

// Ejercicio 6


?>