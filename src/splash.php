<?php
session_start(); // Iniciar a sessão

// Verifique se a variável de sessão "username" está definida
if (!isset($_SESSION["username"])) {
    header("HTTP/1.1 302 Found");
    header("Location: /src/login.php");
    exit;
}

// Obtenha o nome de usuário da variável de sessão
$nomeUsuario = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;url=home.php">
    <title>Carregando...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/style/splash.css">
</head>

<body>
    <div class="sound-wave">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</body>

</html>