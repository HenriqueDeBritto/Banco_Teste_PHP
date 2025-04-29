<?php
session_start();
require '../config/config.php';

$username = $_POST['username'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("SELECT * FROM dados WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($senha,$user['senha'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: ../public/index.php");
} else {
    echo "Login inválido. <a href='../public/login.php'>Voltar</a>";
}


?>