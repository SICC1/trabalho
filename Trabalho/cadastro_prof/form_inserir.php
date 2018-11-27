<?php
include '../cabecalho.php';
?>
<div class="col-md-8 container-fluid" id="div-cor2">

    <form method="post" action="inserir.php">
        <div class="row">
            <div class="col-12" style="text-align: center">
                <h1>Cadastre-se</h1>
                <p>Faça parte dessa grande família, não perca tempo, corra.</p>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Nome<a style="color: red">*</a></label>
                <input type="text" name="nome" class="form-control" placeholder="Primeiro Nome" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome">
            </div>
            <div class="col-md-4 mb-3">
                <label>Profissão<a style="color: red">*</a></label>
                <input type="text" name="profissao" class="form-control" placeholder="Profissão" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Username<a style="color: red">*</a></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Password<a style="color: red">*</a></label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>E-mail<a style="color: red">*</a></label>
                <div class="input-group">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>CPF<a style="color: red">*</a></label>
                <input type="number" name="cpf" class="form-control" placeholder="CPF" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Celular</label>
                <input type="number" name="celular" class="form-control" placeholder="Celular" >
            </div>
            <div class="col-md-4 mb-3">
                <label>Depto</label>
                <input type="text" name="depto" class="form-control" placeholder="Depto">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Cargo</label>
                <input type="text" name="cargo" class="form-control" id="validationDefault04" placeholder="Cargo">
            </div>
            <div class="col-md-4 mb-3">
                <label>CEP<a style="color: red">*</a></label>
                <input type="number" name="cep" class="form-control" placeholder="CEP" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Endereço</label>
                <input type="text" name="endereco" class="form-control" id="validationDefault04" placeholder="Endereço" >
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="sexo">Sexo<a style="color: red">*</a></label>
                <br>
                <select id="sexo" name="sexo" class="form-control">
                    <option  value="Masculino" >Masculino</option>
                    <option value="Feminino">Femino</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label>Data de Nasc.</label>
                <input type="date" name="data_nasc" class="form-control" placeholder="Data de nascimento" >
            </div>
        </div>
        <div align="center" class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Aceitar os Termos e as Condições
                </label>
            </div>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cadastrar-se</button>

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmar cadastro</h4>
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

<?php
/* Teste */
//include 'listar.php';

include '../rodape.php';
?>