<?php 
include_once './form_inserir.php';;
?>
<html>
    <head>
    </head>
    <body>
        <div class='modal fade' id='modal_sucesso' role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Parbéns, pedido enviado com sucesso.</h4>
                    </div>
                    <div class="modal-body">
                        <p>Seu pedido de cadastro foi enviado com sucesso. 
                            Aguarde ele ser aprovado para poder entrar em sua conta.</p>
                    </div>
                    <div class="modal-footer">
<!--                        <button class="btn btn-primary" type="submit">Confirmar</button>-->
<button type="button" onclick="redirecionar()" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#documents').ready(function () {
                $('#modal_sucesso').modal('show');
            });
            
            function redirecionar() {
    window.location = "form_inserir.php";
}
            
        </script>
        
    </body>
</html>
