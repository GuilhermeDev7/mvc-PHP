<?php

class PessoaController 
{
        public static function indexx() {
                include "App\Views\Pessoa.php";
        }

        public static function formulario() {
                include "App\Views\Form.php";
        }

        public static function save() {
               
                include "App\Model\ModelPessoa.php";

                $model = new PessoaModel();

                $model->nome = $_POST['nome'];
                $model->cpf = $_POST['cpf'];
                $model->data_nascmento = $_POST['nasc'];

                $model->save();
        }
}

?>