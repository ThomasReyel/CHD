<?php 
if (isset($_POST['nomeFantasia'], $_POST['CNPJ'], $_POST['EmailOng'],  $_POST['SenhaOng'], $_POST['RuaOng'], $_POST['BairroOng'], $_POST['CidadeOng'], $_POST['EstadoOng'], $_POST['CEP'], $_POST['Numero'])) {
    
    $ong_nome = $_POST['nomeFantasia'];
    $ong_email = $_POST['EmailOng'];
    $ong_password = $_POST['SenhaOng'];
    $ong_cnpj = $_POST['CNPJ'];
    $eno_endereco =  $_POST['RuaOng'];
    $eno_estado =  $_POST['EstadoOng'];
    $eno_bairro = $_POST['BairroOng'];
    $eno_cidade = $_POST['CidadeOng'];
    $eno_cep =  $_POST['CEP'];
    $eno_numero = $_POST['Numero'];
$user = new ONG();
$admin = new Admin();
$estrangeira = $admin -> LocalizarOng($_POST['id']);

$user -> AtualizarDadosOng($ong_nome, $ong_email,$ong_password,$ong_cnpj,$_POST['id']);
$user -> AtualizarEnderecoOng($eno_endereco, $eno_bairro, $eno_cidade, $eno_estado, $eno_cep, $eno_numero, $estrangeira['ong_eno_id']);

header('location: /admin');

} else{}
?>