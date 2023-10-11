<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio POO Individual 10</title>
</head>
<body>

<form method="POST" action="">

    <table><h1>Persona 1</h1>
        <tr>            
        <tr>
            <td>
                <label>Nombre:</label>
                <input type="text" name="nombre1">
            </td>
        </tr>
        <tr>            
        <tr>
            <td>
                <label>Apellidos:</label>
                <input type="text" name="apellidos1">
            </td>
        </tr>
        <tr>
            <td>
                <label>Edad:</label>
                <input type="number" name="edad1">
            </td>
        </tr>        
        <tr>
            <td>
                <input type="radio" id="mujer1" name="mujer1" value="Mujer">
                <label >Mujer</label><br>                
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" id="hombre1" name="hombre1" value="Hombre">
                <label >Hombre</label><br>                
            </td>
        </tr>
        
    </table>
    <table><h1>Persona 2</h1>
        <tr>            
        <tr>
            <td>
                <label>Nombre:</label>
                <input type="text" name="nombre2">
            </td>
        </tr>
        <tr>            
        <tr>
            <td>
                <label>Apellidos:</label>
                <input type="text" name="apellidos2">
            </td>
        </tr>
        <tr>
            <td>
                <label>Edad:</label>
                <input type="number" name="edad2">
            </td>
        </tr>        
        <tr>
            <td>
                <input type="radio" id="mujer2" name="mujer2" value="Mujer">
                <label >Mujer</label><br>                
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" id="hombre2" name="hombre2" value="Hombre">
                <label >Hombre</label><br><br>           
            </td>
        </tr>
        
    </table>
    <input type="submit" name="boton" value="Aceptar">

</form>

<?php

//LLAMADA A LA FUNCIÓN

include('Humano.php');

//CREACIÓN OBJETO (INSTANCIAR LAS CLASES MUJER Y HOMBRE)

$mujer1=new Mujer();
$mujer2=new Mujer();
$hombre1=new Hombre();
$hombre2=new Hombre();

echo '<hr>';

//ASIGNAR PARÁMETROS A ATRIBUTOS MEDIANTE SET

//Clase Mujer1

$mujer1->setNombre($_POST['nombre1']);
$mujer1->setApellidos($_POST['apellidos1']);
$mujer1->setEdad($_POST['edad1']);
$mujer1->setGenero($_POST['mujer1']);

//Clase Mujer2

$mujer2->setNombre($_POST['nombre2']);
$mujer2->setApellidos($_POST['apellidos2']);
$mujer2->setEdad($_POST['edad2']);
$mujer2->setGenero($_POST['mujer2']);

//Clase Hombre1

$hombre1->setNombre($_POST['nombre1']);
$hombre1->setApellidos($_POST['apellidos1']);
$hombre1->setEdad($_POST['edad1']);
$hombre1->setGenero($_POST['hombre1']);


//Clase Hombre2

$hombre2->setNombre($_POST['nombre2']);
$hombre2->setApellidos($_POST['apellidos2']);
$hombre2->setEdad($_POST['edad2']);
$hombre2->setGenero($_POST['hombre2']);

echo '<hr>';

//LLAMAR A LOS GETS

if(isset($_POST['mujer1']))
{
    echo $mujer1->descripcion();
}
elseif(isset($_POST['hombre1']))
{
    echo $hombre1->descripcion();
}

if(isset($_POST['mujer2']))
{
    echo $mujer2->descripcion();
}
elseif(isset($_POST['hombre2']))
{
    echo $hombre2->descripcion();
}

?>

</body>
</html>