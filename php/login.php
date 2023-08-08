<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "admin", "mybog");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$email = trim($_POST['Email']);
$password = trim($_POST['Password']);

// Buscar el hash almacenado en la base de datos para el correo proporcionado
$sql = "SELECT * FROM cuentas WHERE Email = '$email'";
$resultado = mysqli_query($conexion, $sql);

if ($fila = mysqli_fetch_assoc($resultado)) {
    $hashAlmacenado = $fila['Password'];

    // Verificar la contraseña utilizando password_verify()
    if (password_verify($password, $hashAlmacenado)) {
        $_SESSION['user_id'] = true;
        echo '<div class="alert alert-success" role="alert">
        Inicio de sesión exitoso. Serás redireccionado en 3 segundos.
        </div>';
        echo '<script> setTimeout(function(){ window.location.href = "../calendario.php"; }, 3000); </script>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Credenciales incorrectas. Inténtalo de nuevo.
              </div>';
        echo '<script> setTimeout(function(){ window.location.href = "../main.php"; }, 3000); </script>';
        exit;
    }
} else {
    echo '<div class="alert alert-danger" role="alert">
            Credenciales incorrectas. Inténtalo de nuevo.
          </div>';
    echo '<script> setTimeout(function(){ window.location.href = "../main.php"; }, 3000); </script>';
    exit;
}
?>
