<?php
include '../cabecalho.php';
?>  
<div class="col-md-8 container-fluid" id="div-cor1">
    
    <form method="post" action="inserir.php">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Primeiro Nome" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Profissão</label>
                <input type="text" name="profissao" class="form-control" placeholder="Profissão" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>E-mail</label>
                <div class="input-group">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>CPF</label>
                <input type="cpf" name="cpf" class="form-control" placeholder="CPF" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Telefone</label>
                <input type="text" name="telefone" class="form-control" id="validationDefault04" placeholder="Telefone" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Celular</label>
                <input type="text" name="celular" class="form-control" placeholder="Celular" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Depto</label>
                <input type="text" name="depto" class="form-control" placeholder="Depto" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Cargo</label>
                <input type="text" name="cargo" class="form-control" id="validationDefault04" placeholder="Cargo" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>CEP</label>
                <input type="text" name="cep" class="form-control" placeholder="CEP" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Endereço</label>
                <input type="text" name="endereco" class="form-control" id="validationDefault04" placeholder="Endereço" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="sexo">Sexo</label>
                <br>
                <select id="sexo" name="sexo" class="form-control">
                    <option  value="Masculino" >Masculino</option>
                    <option value="Feminino">Femino</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label>Data de Nasc.</label>
                <input type="date" name="data_nasc" class="form-control" placeholder="Data de nascimento" required>
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