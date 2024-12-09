<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basedeDatos="BDusuario";
$enlace=mysqli_connect($servidor,$usuario,$clave,$basedeDatos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
        <form action="#" name="BDusuario" method="post">
            <input type="text" name="nombre" placeholder="nombre">
            <input type="email" name="correo" placeholder="correo">
            <input type="text" name="telefono" placeholder="telefono">
            <input type="submit" name="registrar">
            <input type="reset">

        </form>
</body>
</html>
<?php
if(isset($_POST['registrar'])){
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $insertardatos="insert into usuario values ('$nombre','$correo','$telefono','')";
    $ejecutarinsertar=mysqli_query($enlace,$insertardatos);
}
?>