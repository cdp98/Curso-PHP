<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\PostHandler;

class PostController extends Controller {

    private $loggedUser;

    public function __construct() {

        $this->loggedUser = LoginHandler::checkLogin();

        if($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function new() {
        $body = filter_input(INPUT_POST, 'body');

        if($body) {
            $idUser = $this->loggedUser->id;
            $type = 'text';

            PostHandler::addPost($idUser, $type, $body);
        }

        $this->redirect('/home');
    }

}