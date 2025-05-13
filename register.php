<?php
// Procesa el registro de usuario y guarda en usuarios.txt
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    
    if ($nombre && $email && $password) {
        $linea = "$nombre|$email|$password\n";
        file_put_contents('usuarios.txt', $linea, FILE_APPEND);
        header('Location: login.html?registro=exitoso');
        exit();
    } else {
        header('Location: register.html?error=campos');
        exit();
    }
}
?>