<?php

// Criar uma conexão com o banco

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bancodedados = 'Entrada';

$connection = new mysqli($servidor, $usuario, $senha, $bancodedados);

// Verificar conexão
if ($connection->connect_error) {
    die('Conexão falhou' . $connection->connect_error);
}


?>