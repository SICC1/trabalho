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
            <div class="col-md-6 mb-3">
                <label>Nome</label>
                <input type="text" name="nome" value="<?= $linha['nome'] ?>" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" value="<?= $linha['sobrenome'] ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input name="username" type="text" disabled="true" class="form-control" value="<?= $linha['username'] ?>" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?= $linha['password'] ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>E-mail</label>
                <div class="input-group">
                    <input type="email" name="email" class="form-control" value="<?= $linha['email'] ?>"   aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
                <div class="col-md-4 mb-3">
                <label>CPF</label>
                <input type="cpf" name="cpf" class="form-control" value="<?=$linha['cpf']?>" required>
            </div>  
            <div class="col-md-4 mb-3">
                <label for="sexo">Sexo</label>
                <br>
                <select id="sexo" name="sexo" class="form-control">
                    <option  value="Masculino" >Masculino</option>
                    <option value="Feminino">Femino</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Data de Nasc.</label>
                <input type="date" name="data_nasc" class="form-control" value="<?= $linha['data_nasc'] ?>" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Telefone</label>
                <input type="text" name="telefone" class="form-control" id="validationDefault04" value="<?= $linha['telefone'] ?>" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Celular</label>
                <input type="text" name="celular" class="form-control" value="<?= $linha['celular'] ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Depto</label>
                <input type="text" name="depto" class="form-control" value="<?= $linha['depto'] ?>" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Cargo</label>
                <input type="text" name="cargo" class="form-control" id="validationDefault04" value="<?= $linha['cargo'] ?>" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>CEP</label>
                <input type="text" name="cep" class="form-control" value="<?= $linha['cep'] ?> " required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Endereço</label>
                <input type="text" name="endereco" class="form-control" id="validationDefault04" value="<?= $linha['endereco'] ?>" required>
            </div>
        </div>
        <div align="center" class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Aceitar os Termos e as Condições
                </label>
            </div>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Alterar Dados</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmar alteração</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enviar registros.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Confirmar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
