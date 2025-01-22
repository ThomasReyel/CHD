<?php

 require_once('./Config/connect.php');

if (hasUser()) {
    header('Location: /ong');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: /cadastro');
}

if (isset($_POST['nomeFantasia'], $_POST['CNPJ'], $_POST['EmailOng'],  $_POST['SenhaOng'], $_POST['RuaOng'], $_POST['BairroOng'],
$_POST['CidadeOng'], $_POST['EstadoOng'], $_POST['CEP'])) {
    
    $ong_nome = $_POST['nomeFantasia'];
    $ong_cnpj = $_POST['CNPJ']; 
    $ong_email = $_POST['EmailOng']; 
    $ong_senha = $_POST['SenhaOng']; 
    //Dados do banco de dados EndereçoOng
    $eno_cep = $_POST['CEP'];
    $eno_rua = $_POST['RuaOng'];
    $eno_cidade = $_POST['CidadeOng']; 
    $eno_estado = $_POST['EstadoOng'];
    $eno_bairro = $_POST['BairroOng'];
    $eno_numero = $_POST['Numero'];

    //Criptografa a senha
    $ong_cript_pass = password_hash($ong_senha, PASSWORD_DEFAULT);

    //Receber esses dados do Pages.

    $ong = new Ong();
    $data = $ong->BuscarOng($ong_email);

    if ($data) {
        $_SESSION['user'] = $ong_nome;
        header('Location: /ong');
    } else {
       $ong->salvarEnderecoOng($eno_rua, $eno_bairro, $eno_cidade, $eno_estado, $eno_numero, $eno_cep);
       $ong_id = $ong->SalvarEstrangeiraOng($eno_rua, $eno_bairro, $eno_cidade, $eno_estado, $eno_cep);
       $ong->salvarOng($ong_nome, $ong_cnpj, $ong_email, $ong_cript_pass, $ong_id);
       $_SESSION['user'] = $ong_nome; 
       header('Location: /ong');
    }

} else{
    header('Location: /cadastroOng');
}

?>