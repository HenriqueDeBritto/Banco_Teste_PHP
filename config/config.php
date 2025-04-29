<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'usuarios';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>