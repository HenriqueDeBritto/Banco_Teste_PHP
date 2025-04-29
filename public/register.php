<?php include '../includes/header.php' ?>
<h2>Cadastrar novo usuário</h2>

<form action="../auth/registerProcess.php" method="post">
    <input type="text" name="username" placeholder="Novo usuario" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Cadastrar</button>
</form>
<p><a href="login.php">Já tenho conta</a></p>

<?php include '../includes/footer.php' ?>