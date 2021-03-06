<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' =>  'api' ], function () use ( $router){
    $router->post('register', 'AuthController@register');
    $router->post('login','AuthController@login');
    $router->get('profile', 'UserController@profile');
    $router->get('users/{id}', 'UserController@singleUser');
    $router->get('users', 'UserController@allUsers');
    $router->put('posts/{id}', 'UserController@update');
    $router->delete('posts/{id}', 'UserController@delete');
    $router->delete('admin/{id}', 'AdminController@delete');
    $router->get('create','PostController@create');


});
