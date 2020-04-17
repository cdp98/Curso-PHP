<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $nome = 'Daniel';
        $posts = [
            ['titulo' => 'Titulo teste 1', 'corpo' => 'Corpo da postagem 1'],
            ['titulo' => 'Titulo teste 2', 'corpo' => 'Corpo da postagem 2'],
            ['titulo' => 'Titulo teste 3', 'corpo' => 'Corpo da postagem 3'],
            ['titulo' => 'Titulo teste 4', 'corpo' => 'Corpo da postagem 4'],
            ['titulo' => 'Titulo teste 5', 'corpo' => 'Corpo da postagem 5']
        ];
        $this->render('home', [
            'nome' => $nome,
            'idade' => 90,
            'posts' => $posts
        ]);
    }

    public function fotos() {
        $this->render('fotos');
    }

    public function foto($parametro) {
        echo "Acessando fotos: ".$parametro['id'];
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        echo "Nome é: ".$args['nome'];
    }

}