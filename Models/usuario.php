<?php 
require_once('./Config/connect.php');

class Usuario extends Conect {
        
    public function SalvarDoador(string $nome, string $email, string $pwd, string $cpf, int $id){
        $insert = $this->connection->prepare("INSERT INTO tb_doador (doa_nome, doa_email, doa_senha, doa_cpf, doa_end_id)
         VALUES (?, ?, ?, ?, ?)");
        $insert->bindParam(1, $nome);
        $insert->bindParam(2, $email);
        $insert->bindParam(3, $pwd);
        $insert->bindParam(4, $cpf);
        $insert->bindParam(5, $id);
        $insert->execute();
        return $insert;
    }

    public function BuscarDoador(string $email){
        $select = $this->connection->prepare("SELECT * FROM tb_doador WHERE doa_email = :doa_email");
        $select->bindValue(':doa_email', $email);
        $select->execute();
        $result = $select->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function SalvarEstrangeira(string $end_rua, string $end_bairro, string $end_cidade,  string $end_estado, string $end_cep){
        $select = $this->connection->prepare("SELECT end_id FROM tb_endereco WHERE end_rua = :end_rua AND end_bairro = :end_bairro AND end_cidade = :end_cidade  AND end_estado = :end_estado AND end_cep = :end_cep");
    
        // Vincule os parâmetros usando bindParam
        $select->bindParam(':end_rua', $end_rua, PDO::PARAM_STR);
        $select->bindParam(':end_bairro', $end_bairro, PDO::PARAM_STR);
        $select->bindParam(':end_cidade', $end_cidade, PDO::PARAM_STR);
        $select->bindParam(':end_estado', $end_estado, PDO::PARAM_STR);
        $select->bindParam(':end_cep', $end_cep, PDO::PARAM_STR);
    
        $select->execute();
        
        // Recupere o resultado como um único valor, que é o ID da última inserção
        $result = $select->fetch(PDO::FETCH_ASSOC);
        return (int)$result['end_id'];
    }
    
    public function SalvarEndereco(string $rua, string $bairro, string $cidade, string $estado, string $cep, int $numero){
        $insert = $this->connection->prepare("INSERT INTO tb_endereco (end_rua, end_bairro, end_cidade, end_estado, end_cep, end_numero)
         VALUES (?,?,?,?,?,?)");
        $insert->bindParam(1, $rua);
        $insert->bindParam(2, $bairro);
        $insert->bindParam(3, $cidade);
        $insert->bindParam(4, $estado);
        $insert->bindParam(5, $cep);
        $insert->bindParam(6, $numero);

        $insert->execute();
        return $insert;

    
    }

    public function AtualizarEndereco(string $rua, string $bairro, string $cidade, string $estado, string $cep, int $numero, int $id){
        $insert = $this->connection->prepare("UPDATE tb_endereco SET end_rua = :end_rua, end_bairro = :end_bairro, end_cidade = :end_cidade, end_estado = :end_estado, end_cep = :end_cep, end_numero = :end_numero WHERE end_id = $id ");
        $insert->bindParam(':end_rua', $rua);
        $insert->bindParam(':end_bairro', $bairro);
        $insert->bindParam(':end_cidade', $cidade);
        $insert->bindParam(':end_estado', $estado);
        $insert->bindParam(':end_cep', $cep);
        $insert->bindParam(':end_numero', $numero);

        $insert->execute();
        return $insert;

    }

    public function AtualizarDados(string $nome, string $email, string $senha, string $cpf, int $id){
    $update = $this->connection->prepare("UPDATE tb_doador SET doa_nome = :doa_nome, doa_senha = :doa_senha, doa_email = :doa_email, doa_cpf = :doa_cpf WHERE doa_id = $id ");
    $update->bindParam(':doa_nome', $nome);
    $update->bindParam(':doa_email', $email);
    $update->bindParam(':doa_senha', $senha);
    $update->bindParam(':doa_cpf', $cpf);
    
    $update->execute();
    return $update;
    }

} 
?>
