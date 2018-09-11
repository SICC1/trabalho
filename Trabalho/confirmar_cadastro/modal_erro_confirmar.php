<?php 
include_once './form_inserir.php';;
?>
<html>
    <head>
    </head>
    <body>

        <div class='modal fade' id='modal_erro_confirmar' role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Erro! :'(</h4>
                    </div>
                    <div class="modal-body">
                        <p>Um erro ocorreu ao confirmar o cadastro, por favor contate o suporte ou tente mais tarde.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#documents').ready(function () {
                $('#modal_erro_exluir').modal('show');
            });
        </script>
    </body>
</html>
