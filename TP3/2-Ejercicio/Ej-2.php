<?php

/*
  Desarrollar una página web que permita cargar los siguientes datos de una 
  persona:
  a. Nombre y Apellido
  b. Dirección
  c. Teléfono
  d. Sexo
  e. Edad
  f.
  E-mail
  g. Profesión/ocupación (la misma debe ser seleccionada de una lista)
  h. Hobbies (debe seleccionarse de una lista pudiendo elegir mas de uno)
  i.
  Nacionalidad (debe seleccionarse de una lista)
  Los datos ingresados deberán ser enviados a través de la URL a otra página donde 
  se mostrarán con un formato de tabla
*/



$nombre = $_GET('fNombre');
$direccion = $_GET('fDireccion');
$telefono = $_GET('fTelefono');
$sexo = $_GET('fSexo');
$profesion = $_GET('fProfesion');
$hobbies = $_GET('fHobbiess');
$nacionalidad = $_GET('fNacionalidad');


echo "Nombre: $nombre";
echo "Dirección: $direccion";
echo "Telefono: $telefono";
echo "Sexo: $sexo";
echo "Profesión: $profesion";
echo "Hobbies = $hobbies";
echo "Nacionalidad = $nacionalidad";
?>