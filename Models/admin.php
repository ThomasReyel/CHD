<?php 
 require_once('./Config/connect.php');   

 class Admin extends Conect {

        function LocalizarOng(int $id){
            $select = $this->connection->prepare("SELECT * FROM tb_enderecoOng, tb_ong WHERE eno_id = :ong_eno_id");
            $select->bindValue(':ong_eno_id', $id);
            $select->execute();
            $result = $select->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        function listarOng(){
            $select = $this->connection->prepare("SELECT * FROM tb_ong");
            $select->execute();
            $linha = [];
            if ($select->rowCount() > 0) {
                $linha = $select->fetchAll(PDO::FETCH_ASSOC);
                return $linha;
            }
        }

        function ApagarDoador(int $id){
            $delete = "DELETE FROM tb_doador WHERE doa_id = :doa_id";
            $stmt = $this->connection->prepare($delete);
            $stmt->bindValue(':doa_id', $id);
    
            if ($stmt->execute()) {
                $msg = "Deletado com sucesso!";
            } else {
                $msg = "Erro ao deletar!";
            }
            return $msg;
        }

        function ApagarOng(int $id){
            $delete = "DELETE FROM tb_ong WHERE ong_id = :ong_id";
            $stmt = $this->connection->prepare($delete);
            $stmt->bindValue(':ong_id', $id);
    
            if ($stmt->execute()) {
                $msg = "Deletado com sucesso!";
            } else {
                $msg = "Erro ao deletar!";
            }
            return $msg;
        }

        function LocalizarDoador(int $id){
            $select = $this->connection->prepare("SELECT * FROM tb_doador WHERE doa_id = :doa_id");
            $select->bindValue(':doa_id', $id);
            $select->execute();
            $result = $select->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        function LocalizarEnd(int $id){
            $select = $this->connection->prepare("SELECT * FROM tb_endereco, tb_doador WHERE end_id = :doa_end_id");
            $select->bindValue(':doa_end_id', $id);
            $select->execute();
            $result = $select->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        
        function LocalizarEndOng(int $id){
            $select = $this->connection->prepare("SELECT * FROM tb_enderecoOng, tb_ong WHERE eno_id = :ong_eno_id");
            $select->bindValue(':ong_eno_id', $id);
            $select->execute();
            $result = $select->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        
        function listarDoador(){
            $select = $this->connection->prepare("SELECT * FROM tb_doador");
            $select->execute();
            $linha = [];
            if ($select->rowCount() > 0) {
                $linha = $select->fetchAll(PDO::FETCH_ASSOC);
                return $linha;
            }
        }

        function UpdateDoador(string $nome, string $email, string $senha, string $cpf){
            $update = $this->connection->prepare("UPDATE tb_doador SET doa_nome = :doa_nome, doa_email = :doa_email, doa_cpf = :doa_cpf WHERE doa_id = :doa_id ");
            return $update;
        }

        function UpdateOng(string $nome, string $cnpj, string $email, string $senha){
            $update = $this->connection->prepare("UPDATE tb_ong SET ong_nome = :ong_nome, ong_cnpj = :ong_cnpj, ong_email = :ong_email WHERE ong_id = :ong_id ");
            return $update;
        }
    }
?>