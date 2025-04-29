<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'usuarios';

try{
    $pdo = new PDO("mysql:host=$host;bancoNome=$banco;charset=utf8", $usuario, $senha);
} cath (PDOException $e){
    die("Erro na conectiomn: ". $e->getMessage());
}
?>