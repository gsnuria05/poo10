<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio POO Individual 4 (Herrencia)</title>
</head>
<body>

<form method="POST" action="">

    <table>
        <tr>            
        <tr>
            <td>
                <label>Nombre:</label>
                <input type="text" name="nombre">
            </td>
        </tr>
        <tr>            
        <tr>
            <td>
                <label>Apellidos:</label>
                <input type="text" name="apellidos">
            </td>
        </tr>
        <tr>
            <td>
                <label>Edad:</label>
                <input type="number" name="edad">
            </td>
        </tr>        
        <tr>
            <td>
                <input type="radio" id="mujer" name="mujer" value="Mujer">
                <label >Mujer</label><br>                
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" id="hombre" name="hombre" value="Hombre">
                <label >Hombre</label><br>                
            </td>
        </tr>
        
    </table>
    <input type="submit" name="boton" value="Aceptar">

</form>

<?php

//LLAMADA A LA FUNCIÓN

include('Humano.php');

//CREACIÓN OBJETO (INSTANCIAR LAS CLASES MUJER Y HOMBRE)

$mujer=new Mujer();
$hombre=new Hombre();

echo '<hr>';

//ASIGNAR PARÁMETROS A ATRIBUTOS MEDIANTE SET

//Clase Mujer

$mujer->setNombre($_POST['nombre']);
$mujer->setApellidos($_POST['apellidos']);
$mujer->setEdad($_POST['edad']);
$mujer->setGenero($_POST['mujer']);

//Clase Hombre

$hombre->setNombre($_POST['nombre']);
$hombre->setApellidos($_POST['apellidos']);
$hombre->setEdad($_POST['edad']);
$hombre->setGenero($_POST['hombre']);

echo '<hr>';

//LLAMAR A LOS GETS

if(isset($_POST['mujer']))
{
    $mujer->descripcion($mujer);
}
elseif(isset($_POST['hombre']))
{
    $hombre->descripcion($hombre);
}

?>

</body>
</html>