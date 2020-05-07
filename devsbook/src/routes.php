<?php
use core\Router;

$router = new Router();

$router->get('/home', 'HomeController@index');
$router->get('/login', 'LoginController@signin');
$router->get('/cadastro', 'LoginController@signup');
$router->post('/login', 'LoginController@signinAction');
$router->post('/cadastro', 'LoginController@signupAction');