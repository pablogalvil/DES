<?php
session_start();
use App\Utils\Utils;

$tiempoInactividad = 600; // 10 minutos (600 segundos)

if (isset($_SESSION['ultimoAcceso'])) {
    $tiempoTranscurrido = time() - $_SESSION['ultimoAcceso'];
    if ($tiempoTranscurrido > $tiempoInactividad) {
        session_destroy();
        Utils::redirect('/');
        exit();
    }
}

$_SESSION['ultimoAcceso'] = time();

if (!isset($_SESSION['user_id'])) {
    Utils::redirect('/');
    exit;
}
?>