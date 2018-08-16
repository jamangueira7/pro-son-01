<?php


$router->add('GET','/', function (){
    return 'estamos na homepage';
});
$router->add('GET','/users/(\d+)', '\App\Controllers\UsersController::show');

$router->add('GET','/projects/(\d+)', function ($params){
    return 'estamos listndo o projeto de id: '. $params[1];
});