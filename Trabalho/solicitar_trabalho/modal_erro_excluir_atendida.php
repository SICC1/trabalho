<?php
include_once './solicitacoes_atendidas.php';
?>
<html>
    <head>
    </head>
    <body>

        <div class='modal fade' id='modal_erro_exluir' role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Erro! :'(</h4>
                    </div>
                    <div class="modal-body">
                        <p>Um erro ocorreu ao exluir a solicitação de trabalho, por favor
                            entre em contato com o suporte ou aguarde o erro ser corrigido.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" onclick="redirecionar()" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#documents').ready(function() {
                $('#modal_erro_exluir').modal('show');
            });

            function redirecionar() {
                window.location = "solicitacoes_atendidas.php";
            }

        </script>
    </body>
</html>
