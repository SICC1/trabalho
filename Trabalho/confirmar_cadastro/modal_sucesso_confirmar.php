<?php 
include_once './listar.php';
?>
<html>
    <head>
    </head>
    <body>
        <div class='modal fade' id='modal_sucesso' role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmação de cadastro realizado com sucesso.</h4>
                    </div>
<!--                    <div class="modal-body">
                        <p></p>
                    </div>-->
                    <div class="modal-footer">
<!--                        <button class="btn btn-primary" type="submit">Confirmar</button>-->
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#documents').ready(function () {
                $('#modal_sucesso').modal('show');
            });
        </script>
    </body>
</html>
