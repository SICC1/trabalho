<?php
include_once './solicitacoes.php';
?>
<html>
    <head>
    </head>
    <body>
        <div class='modal fade' id='modal_sucesso' role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Solicitação de trabalho atendida com sucesso!</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="redirecionar()" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#documents').ready(function() {
                $('#modal_sucesso').modal('show');
            });

            function redirecionar() {
                window.location = "solicitacoes.php";
            }
        </script>
    </body>
</html>
