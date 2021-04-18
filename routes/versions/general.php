<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', 'CourseController@index');


$router->get('/course', 'CourseController@single');
$router->post('/course', 'CourseController@store');

$router->post('login', 'UserController@login');
$router->post('register', 'UserController@register');

$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->post('user', function () {
        return \Auth::user();
    });
});
