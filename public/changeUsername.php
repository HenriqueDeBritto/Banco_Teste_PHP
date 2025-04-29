<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
include '../includes/header.php';
?>
<h2>Alterar nome de usuário</h2>
<form action="../auth/changeUsernameProcess.php" method="post">
    <input type="text" name="new_username" placeholder="Novo nome de usuário" required>
    <button type="submit">Alterar</button>
</form>
<p><a href="index.php">Voltar</a></p>
<?php include '../includes/footer.php'; ?>
