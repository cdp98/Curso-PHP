<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/adicionar', 'UsuariosController@add');
$router->post('/adicionar', 'UsuariosController@addAction');
