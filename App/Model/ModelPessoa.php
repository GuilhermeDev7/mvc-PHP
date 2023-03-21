<?php

include "App\DAO\PessoaDAO.php";


class PessoaModel {
        public $id, $nome, $cpf, $data_nascmento;

        
        public function save()
        {
                include "App\DAO\PessoaDAO.php";

                $dao = new PessoaDAO();
                if(empty($this->id))
        {
            // Chamando o método insert que recebe o próprio objeto model
            // já preenchido
            $dao->insert($this);

        } 
               
        }
}

?>