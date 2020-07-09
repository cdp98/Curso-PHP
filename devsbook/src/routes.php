<?php
use core\Router;

$router = new Router();

$router->get('/home', 'HomeController@index');

$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');

$router->post('/post/new', 'PostController@new');

// $router->get('/pesquisa', '');
// $router->get('sair', '');
// $router->get('/perfil', '');
// $router->get('/amigos', '');
// $router->get('/config', '');
// $router->get('/fotos', '');