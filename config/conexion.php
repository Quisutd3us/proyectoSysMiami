<?php
require_once "global.php";

$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_query($conexion, 'SET_NAMES "' . DB_ENCODE . '"');

// test error

if (mysqli_connect_errno()) {
    printf("Fallo Conexion con el servidor: %s\n", mysqli_connect_error());
}
