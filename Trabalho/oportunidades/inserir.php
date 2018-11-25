<?php

include_once '../conectar.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

$sql = "insert into oportunidades (nome, descricao, data_inserida) values ('$nome', '$descricao', now())";
echo $sql . "<br>";

$id_oportunidades = mysqli_query($conexao, $sql);
$retorno_id_oportunidades = mysqli_insert_id($conexao);

echo $retorno_id_oportunidades . "<br>";
if(isset($_FILES['arquivo'])){
    $extencao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()) . $extencao;
    $diretorio = "$url_relativo/uploads/";
    
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
    
    $sql_arquivo = "insert into arquivos (nome_arquivo) values ('$novo_nome')";
    $recurso_arquivo = mysqli_query($conexao, $sql_arquivo);
    $retorno_id_arquivo = mysqli_insert_id($conexao);
    echo 'id_arquivo: ' . $retorno_id_arquivo;
    
    $sql_arquivo_oportunidades = "insert into arquivo_oportunidades(id_arquivo, id_oportunidades) values ($retorno_id_arquivo, "
            . "$retorno_id_oportunidades)";
    mysqli_query($conexao, $sql_arquivo_oportunidades);
}

if (mysqli_affected_rows($conexao) > 0) {
    header('Location: modal_sucesso.php');
} else {
    header('Location: modal_erro.php');
}













//// Pasta onde o arquivo vai ser salvo
//$_UP['pasta'] = "$url/upload/";
//// Tamanho máximo do arquivo (em Bytes)
//$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
//// Array com as extensões permitidas
//$_UP['extensoes'] = array('jpg', 'png', 'gif', 'pdf', 'txt', 'jpeg');
//// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
//$_UP['renomeia'] = false;
//// Array com os tipos de erros de upload do PHP
//$_UP['erros'][0] = 'Não houve erro';
//$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
//$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
//$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
//$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
//// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
//if ($_FILES['arquivo']['error'] != 0) {
//    die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
//    exit; // Para a execução do script
//}
//// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
//// Faz a verificação da extensão do arquivo
//$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
//if (array_search($extensao, $_UP['extensoes']) === false) {
//    echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
//    exit;
//}
//// Faz a verificação do tamanho do arquivo
//if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
//    echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
//    exit;
//}
//// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
//// Primeiro verifica se deve trocar o nome do arquivo
//if ($_UP['renomeia'] == true) {
//    // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
//    $nome_final = md5(time()) . '.jpg';
//} else {
//    // Mantém o nome original do arquivo
//    $nome_final = $_FILES['arquivo']['name'];
//}
//
//// Depois verifica se é possível mover o arquivo para a pasta escolhida
//if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
//    // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
//    echo "Upload efetuado com sucesso!";
//    echo '<a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
//} else {
//    // Não foi possível fazer o upload, provavelmente a pasta está incorreta
//    echo "Não foi possível enviar o arquivo, tente novamente";
//}