<?php
include '../cabecalho.php';
?>
<form method="post" action="inserir.php">
    Nome: <input type="text" name="username">
    Senha: <input type="password" name="password">
    <input type="submit" value="Inserir">
</form>

<?php
include '../rodape.php';

        function estaLogado() {
    return isset($_SESSION['username']);
}