<?php
namespace src\Controllers;

use core\Controller;
use src\models\Usuario;

class UsuariosController extends Controller {

    public function add() {
        $this->render('adicionar');
    }

    public function addAction() {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $senha = filter_input(INPUT_POST, 'senha');
        //recebendo os dados.
        if ($name && $email) {
            $data = Usuario::select()->where('email', $email)->execute();
            //verificou que não existe esse email na tabela.
            if (count($data) === 0) {
                //insere
                Usuario::insert([
                    'nome'  => $name,
                    'email' => $email,
                    'senha' => $senha
                ])->execute();
                echo "inseriu";
                exit;
            }
        }

        //redirect adicionar
        echo "deu problema";
    }

}