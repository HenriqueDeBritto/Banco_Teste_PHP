<?php
session_start();
require '../config/config.php';

$new_username = $_POST['new_username'];
$user_id = $_SESSION['user_id'];

$stmt = $pdo->prepare("UPDATE dados SET username = ? WHERE id = ?");
try {
    $stmt->execute([$new_username, $user_id]);
    $_SESSION['username'] = $new_username;
    echo "Nome alterado com sucesso. <a href='../public/index.php'>Voltar</a>";
} catch (PDOException $e) {
    echo "Erro: nome já está em uso. <a href='../public/change_username.php'>Tentar outro</a>";
}
