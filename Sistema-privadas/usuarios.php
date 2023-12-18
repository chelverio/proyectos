<?php

function verificarInicioSesion($username, $password) {
    global $conn;

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return null;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $usuario = verificarInicioSesion($username, $password);

    if ($usuario != null) {
        
        session_start();
        $_SESSION["id_usuario"] = $usuario["id_usuario"];
        $_SESSION["username"] = $usuario["username"];
        $_SESSION["role"] = $usuario["role"];

        
        if ($usuario["role"] == "admin") {
            header("Location: panel_admin.php");
        } else {
            header("Location: panel_usuario.php");
        }
        exit();
    } else {
        
        echo "Inicio de sesión fallido. Verifica tus credenciales.";
    }
}
?>
