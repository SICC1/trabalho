<?php
include '../cabecalho.php';
?>  
<?php
$id = $_GET['id'];
include '../bd/conectar.php';
$sql_pessoa = "select profissional.*, usuario.* from usuario 
join profissional on usuario.id = profissional.id_usuario where usuario.id = $id";

$resultado = mysqli_query($conexao, $sql_pessoa);
$linha = mysqli_fetch_array($resultado);

?>
<div class="col-md-8 container-fluid" id="div-cor1">
    <form method="post" action="alterar.php">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="hidden" name="id_usuario" value="<?= $linha['id_usuario'] ?>">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Nome</label>
                <input type="text" name="nome" value="<?= $linha['nome'] ?>" class="form-control" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input name="username" type="text" disabled="true" class="form-control" value="<?= $linha['username'] ?>" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?= $linha['password'] ?>" required>
            </div>    
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Data de Nasc.</label>
                <input type="date" name="data_nasc" class="form-control" value="<?= $linha['data_nasc'] ?>" required>
            </div>
            <div class="col-md-3 mb-3">
                <label>Telefone</label>
                <input type="text" name="telefone" class="form-control" id="validationDefault04" value="<?= $linha['telefone'] ?>" required>
            </div>
            <div class="col-md-3 mb-3">
                <label>Depto</label>
                <input type="text" name="depto" class="form-control" value="<?= $linha['depto'] ?>" required>
            </div>
        </div>
        <button align="center" class="btn btn-primary" type="submit">Alterar</button>
    </form>
</body>
</html>
