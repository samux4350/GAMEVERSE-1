<?php
session_start();

if (!isset($_SESSION['nombreUsuario'])) {
    header("Location: index.php");
    exit();
}

$conexion = mysqli_connect("127.0.0.1", "root", "", "gameverse");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$nombreUsuario = $_SESSION['nombreUsuario'];

$consultaDatos = "SELECT correo, codigo_verificacion FROM usuarios WHERE nombre = '$nombreUsuario'";
$resultadoDatos = mysqli_query($conexion, $consultaDatos);

$correoUsuario = '';
$codigoVerificacion = '';

if ($resultadoDatos) {
    if ($fila = mysqli_fetch_assoc($resultadoDatos)) {
        $correoUsuario = !empty($fila['correo']) ? $fila['correo'] : '';
        $codigoVerificacion = !empty($fila['codigo_verificacion']) ? $fila['codigo_verificacion'] : '';
    }
}

mysqli_close($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigoIngresado = trim($_POST['codigoVerificacion']); 

    if ($codigoIngresado === $codigoVerificacion) {
     
        header("Location: perfil.php");
        exit();
    } else {
        echo "Código de verificación incorrecto. Inténtalo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">WW
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Correo Electrónico</title>
</head>
<body>
    <h1>Verificar Correo Electrónico</h1>
    <p>Se ha enviado un código de verificación a <?php echo $correoUsuario; ?>.</p>
    <form method="post">
        <label for="codigoVerificacion">Ingresa el código de verificación:</label>
        <input type="text" id="codigoVerificacion" name="codigoVerificacion" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>