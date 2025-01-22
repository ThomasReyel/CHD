<?php

 require_once('./Config/connect.php');
 
if (hasUser()) {
    header('Location: /doador');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: /cadastro');
}

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

    //criptografa a senha
    $doa_cript_pass = password_hash($doa_password, PASSWORD_DEFAULT);

    $Usuario = new Usuario();

    $data = $Usuario -> BuscarDoador($doa_email);

    if ($data) {
        $_SESSION['user'] = $doa_nome;
        header('Location: /doador');
    } else { 
        $Usuario->SalvarEndereco($end_endereco, $end_bairro, $end_cidade, $end_estado ,$end_cep, $end_numero);
        $doa_end_id = $Usuario->SalvarEstrangeira($end_endereco, $end_bairro, $end_cidade, $end_estado ,$end_cep);  
        $Usuario->SalvarDoador($doa_nome, $doa_email, $doa_cript_pass, $doa_cpf, $doa_end_id);
        $_SESSION['user'] = $doa_nome;        
        header('Location: /doador');
    }

}

?>