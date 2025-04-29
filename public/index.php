<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
include '../includes/header.php';
?>
<h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<p><a href="change_username.php">Alterar nome de usuário</a></p>
<p><a href="logout.php">Sair</a></p>
<?php include '../includes/footer.php'; ?>