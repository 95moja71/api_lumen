<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$versions = config('app.versions');




$router->group(['prefix' => 'api'], function () use ($router, $versions) {
    foreach ($versions as $version) {
        if ($version['active']) {
            $router->group(['prefix' => $version['url'] . '/', 'as' => $version['version'] . '.', 'namespace' => $version['version']], function () use ($router) {
                $router->get('/', 'CourseController@index');
            });
        }
    }
});


