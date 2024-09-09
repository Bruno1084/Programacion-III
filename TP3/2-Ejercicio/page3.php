<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page 1 - Ejercicio 2</title>
</head>
<body>
  <h3>Esto debería ser un formulario</h3>
  <form action="Ej-2.php" method="post">
    <div>
      <label for="fNombre">Nombre: </label>
      <input type="text" name="fNombre">
    </div>
    <div>
      <label for="fDireccion">Dirección: </label>
      <input type="text" name="fDireccion">
    </div>
    <div>
      <label for="fNumero">Telefono: </label>
      <input type="number" name="fNumero">
    </div>
    <div>
      <label for="fSexo">Sexo: </label>
      <input type="radio" name="fSexo" placeholder="Man">
      <input type="radio" name="fSexo" placeholder="Woman"> 
    </div>
    <div>
      <label for="fEdad">Edad:</label>
      <input type="number" name="fEdad">
    </div>
    <div>
      <label for="fCorreo">Email:</label>
      <input type="email" name="fCorreo">
    </div>
    <div>
      <label for="fProfesion"></label>
      <?php
        require_once './Profesiones.php';

        foreach ($profesiones as $profesion) {
          echo "<input type='radio' name='fProfesion'>$profesion</input";
        };
      ?>
    </div>
  </form>

  <?php
    $nombre = $_GET('fNombre');
    $Direccion = $_GET('fDireccion');
    $telefono = $_GET('fTelefono');
    $sexo = $_GET('fSexo');
    $profesion = $_GET('fProfesion');
    $hobbies = $_GET('fHobbiess');
    $nacionalidad = $_GET('fNacionalidad');  
  ?>

  <div>
    <a 
      href="./Ej-2.php?nombre=nombre&&direccion=direccion
      &&telefono=telefono&&sexo=sexo&&profesion=profesion
      &&hobbies=hobbies&&nacionalidad=nacionalidad"
    >
      Go to page Ej-2.php
    </a>
  </div>
</body>
</html>