<?php 
if (isset($_POST['nome'], $_POST['email'], $_POST['password'],  $_POST['CPF'], $_POST['end'], $_POST['estado'], $_POST['bairro'], $_POST['cidade'], $_POST['CEP'], $_POST['Numero'])) {
    
    $doa_nome = $_POST['nome'];
    $doa_email = $_POST['email'];
    $doa_password = $_POST['password'];
    $doa_cpf = $_POST['CPF'];
    $end_endereco =  $_POST['end'];
    $end_estado =  $_POST['estado'];
    $end_bairro = $_POST['bairro'];
    $end_cidade = $_POST['cidade'];
    $end_cep =  $_POST['CEP'];
    $end_numero = $_POST['Numero'];
$user = new Usuario();
$admin = new Admin();
$estrangeira = $admin -> LocalizarDoador($_POST['id']);

$user -> AtualizarDados($doa_nome, $doa_email,$doa_password,$doa_cpf,$_POST['id']);
$user -> AtualizarEndereco($end_endereco, $end_bairro, $end_cidade, $end_estado, $end_cep, $end_numero, $estrangeira['doa_end_id']);

header('location: /admin');

} else{}
?>