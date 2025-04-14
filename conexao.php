<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'usuarios';

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die('conexao falhou papai'. $conn->connect_error);
}

?>