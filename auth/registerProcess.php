<?php
require '../config/config.php';

$username = $_POST['username'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO usuarios (username, senha) VALUES (?, ?)");
try {
    $stmt->execute([$username, $senha]);
    echo "Usuário criado com sucesso. <a href='../public/login.php'>Fazer login</a>";
} catch (PDOException $e) {
    echo "Erro: nome de usuário já existe. <a href='../public/register.php'>Tente novamente</a>";
}

?>