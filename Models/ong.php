<?php 
require_once('./Config/connect.php');

class ONG extends Conect {
        
    public function salvarOng(string $ong_nome, string $ong_cnpj, string $ong_email, string $ong_senha, int $ong_eno_id){
        try {
            $insert = $this->connection->prepare('INSERT INTO tb_ong (ong_nome, ong_cnpj, ong_email, ong_senha, ong_eno_id) VALUES (?,?,?,?,?)');
            $insert->execute([$ong_nome, $ong_cnpj, $ong_email, $ong_senha, $ong_eno_id]);
            return true;
        } catch (PDOException $e) {
            echo "Erro ao salvar ONG: " . $e->getMessage();
            return false;
        }
    }

    public function salvarEnderecoOng(string $eno_rua, string $eno_bairro, string $eno_cidade, string $eno_estado, int $eno_numero, string $eno_cep){
        try {
            $insert = $this->connection->prepare('INSERT INTO tb_enderecoOng (eno_rua, eno_bairro, eno_cidade, eno_estado, eno_numero, eno_cep) VALUES (?, ?, ?, ?, ?, ?)');
            $insert->execute([$eno_rua, $eno_bairro, $eno_cidade, $eno_estado, $eno_numero, $eno_cep]);
            return true;
        } catch (PDOException $e) {
            echo "Erro ao salvar endereço da ONG: " . $e->getMessage();
            return false;
        }
    }
    
    public function BuscarIdOng(string $ong_email){
        try {
            $select = $this->connection->prepare('SELECT eno_id FROM tb_enderecoOng, tb_ong WHERE ong_email = :ong_email and eno_id = ong_id');
            $select->bindValue(':ong_email', $ong_email);
            $select->execute();
            return (int)$select;
        } catch (PDOException $e) {
            echo "Erro ao buscar ID da ONG: " . $e->getMessage();
            return false;
        }
    }
    
    public function SalvarEstrangeiraOng(string $eno_rua, string $eno_bairro, string $eno_cidade,  string $eno_estado, string $eno_cep){
        $select = $this->connection->prepare("SELECT eno_id FROM tb_enderecoOng WHERE eno_rua = :eno_rua AND eno_bairro = :eno_bairro AND eno_cidade = :eno_cidade  AND eno_estado = :eno_estado AND eno_cep = :eno_cep");
    
        // Vincule os parâmetros usando bindParam
        $select->bindParam(':eno_rua', $eno_rua, PDO::PARAM_STR);
        $select->bindParam(':eno_bairro', $eno_bairro, PDO::PARAM_STR);
        $select->bindParam(':eno_cidade', $eno_cidade, PDO::PARAM_STR);
        $select->bindParam(':eno_estado', $eno_estado, PDO::PARAM_STR);
        $select->bindParam(':eno_cep', $eno_cep, PDO::PARAM_STR);
    
        $select->execute();
        
        // Recupere o resultado como um único valor, que é o ID da última inserção
        $result = $select->fetch(PDO::FETCH_ASSOC);
        return (int)$result['eno_id'];
    }
    
    public function BuscarOng(string $email){
        try {
            $select = $this->connection->prepare("SELECT * FROM tb_ong WHERE ong_email = :email");
            $select->bindValue(':email', $email);
            $select->execute();
            $result = $select->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Erro ao buscar ONG: " . $e->getMessage();
            return false;
        }
    }

    public function AtualizarEnderecoOng(string $rua, string $bairro, string $cidade, string $estado, string $cep, int $numero, int $id){
        $insert = $this->connection->prepare("UPDATE tb_enderecoOng SET eno_rua = :eno_rua, eno_bairro = :eno_bairro, eno_cidade = :eno_cidade, eno_estado = :eno_estado, eno_cep = :eno_cep, eno_numero = :eno_numero WHERE eno_id = $id ");
        $insert->bindParam(':eno_rua', $rua);
        $insert->bindParam(':eno_bairro', $bairro);
        $insert->bindParam(':eno_cidade', $cidade);
        $insert->bindParam(':eno_estado', $estado);
        $insert->bindParam(':eno_cep', $cep);
        $insert->bindParam(':eno_numero', $numero);

        $insert->execute();
        return $insert;

    }

    public function AtualizarDadosOng(string $nome, string $email, string $senha, string $cnpj, int $id){
    $update = $this->connection->prepare("UPDATE tb_ong SET ong_nome = :ong_nome, ong_senha = :ong_senha, ong_email = :ong_email, ong_cnpj = :ong_cnpj WHERE ong_id = $id ");
    $update->bindParam(':ong_nome', $nome);
    $update->bindParam(':ong_email', $email);
    $update->bindParam(':ong_senha', $senha);
    $update->bindParam(':ong_cnpj', $cnpj);
    
    $update->execute();
    return $update;
    }


}
?>