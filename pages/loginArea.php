<?php
include 'header.php';
?>
<link rel="stylesheet" href="../styles/inicio.css">

<form action="../db/login.php" method="post">
    <input type="hidden" name="login">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Entrar">
</form>

<a href="./registerArea.php">Novo Usuário</a>
