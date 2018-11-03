<?php
//ini_set('display_errors', true);
include '../bd/conectar.php';
include '../cabecalho.php';

$sql = "select profissional.*, usuario.* from usuario join profissional on usuario.id = profissional.id_usuario "
        . "where usuario.username = '$_SESSION[username]'";

//echo $sql;
//die();

$resultado = mysqli_query($conexao, $sql);
?>
<h1 align="center">Dados do seu perfil</h1>
<div class="col-md-8 container-fluid" align="center">
<!--    <table class="table-bordered table-hover" border="1">
        <tr>
            <td>Nome</td><td>Sobrenome</td><td>Data nasc.</td><td>Telefone</td><td>Depto</td><td>Excluir</td><td>Alterar</td>
        </tr>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
                        <tr>
                        <input type="hidden" name="id" value="<?php $linha[id] ?>">
                        <td><?= $linha['nome'] ?></td>
                        <td><?= $linha['data_nasc'] ?></td>
                        <td><?= $linha['telefone'] ?></td>
                        <td><?= $linha['depto'] ?></td>

                        <td><a href="excluir.php?id=<?= $linha['id'] ?>">
                                <img src="../img/excluir.jpeg" class="img-thumbnail" width="50"/></a></td>
                                <td><a href="form_alterar.php?id=<?= $linha['id_usuario'] ?>">
                                <img src="../img/alterar.png" class="img-thumbnail" width="50"></a></td>
                        </tr>


                </table>-->
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
                    <input type="cpf" name="cpf" class="form-control" value="<?= $linha['cpf'] ?>" required>
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
                    <label>Profissão</label>
                    <input type="text" name="profissao" class="form-control" value="<?= $linha['profissao'] ?> " required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label>CEP</label>
                    <input type="text" name="cep" class="form-control" value="<?= $linha['cep'] ?> " required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" id="validationDefault04" value="<?= $linha['endereco'] ?>" required>
                </div>
            </div>
            <div align="center" class="form-group">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Alterar Dados</button>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Confirmar alteração.</h4>
                            </div>
                            <div class="modal-body">
                                <p>Deseja realmente alterar seus dados?</p>
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

        <div align="center" class="form-group">


            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_excluir">Excluir conta</button>

            <div class="modal fade" id="modal_excluir" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmar exclusão.</h4>
                        </div>
                        <div class="modal-body">
                            <p>Tem certeza que deseja realmente excluir?</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="button" onclick="excluir_perfil()">Confirmar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function excluir_perfil() {
                    window.location = "excluir_perfil.php?id=<?= $linha['id'] ?>";
                }
            </script>

            <?php
        }
        ?>
    </div>
</div>