<?php

include "App\Model\ModelPessoa.php";

class PessoaDAO {
        private $conexao;

        public function __construct()
        {
                $mysqli = new mysqli($host="localhost", $user="root", $senha="", $db="pessoa");
                if($mysqli->errno) {
                        die("Nao foi possivel ");
                }
        }

        public function insert(PessoaModel $model)
        {

                $sql = "INSERT INTO pessoa(nome, cpf, data_nascmento) VALUES(?,?,?)";

                $stmt = $this->conexao->prepare($sql);

                $stmt->bindValue(1, $model->nome);
                $stmt->bindValue(2, $model->cpf);
                $stmt->bindValue(3, $model->data);

                $mysqli->query($stmt) or die($mysqli->error);
        }
}

?>