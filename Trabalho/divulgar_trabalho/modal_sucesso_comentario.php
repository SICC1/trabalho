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
                        <h4 class="modal-title">Parbéns, divulgação do comentário feita com sucesso.</h4>
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
    window.location = "listar.php";
}
            
        </script>
        
    </body>
</html>
