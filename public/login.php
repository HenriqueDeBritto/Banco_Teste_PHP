<?php include '../includes/header.php'; ?>

<h2>Loginn</h2>

<form action="../auth/loginProcess.php" method="post">
    <input type="text" name="username" placeholder="Usuário" required>
    <input type="password" name="senha" placeholder="Senha" rquired>
    <button type="submit">Entrar</button>
</form>

<p><a href="register.php">Criar nova conta</a></p>

<?php include '../includes/footer.php'; ?>