<?php
include_once '../index.php';
?>
<html>
    <head>
    </head>
    <body>
        <div class='modal fade' id='modal_erro' role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Erro! :'(</h4>
                    </div>
                    <div class="modal-body">
                        <p>Um erro ocorreu ao fazer a inserção, por favor entre em contato o suporte 
                            ou aguarde o problema ser resolvido.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="redirecionar()" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#documents').ready(function () {
                $('#modal_erro').modal('show');
            });
            function redirecionar() {
                window.location = "../index.php";
            }
        </script>
    </body>
</html>
