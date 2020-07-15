<?php

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

use App\Events\ExampleEvent;

$router->get('/', function () use ($router) {
    event(new ExampleEvent('this is message'));
    return 'Done';
});

$router->get('/channel', function () use ($router) {
    return view('welcome');
});


$router->get('categories', 'CategoriesController@index');
$router->get('categories/{id}', 'CategoriesController@show');
$router->post('categories', 'CategoriesController@store');
$router->put('categories/{id}', 'CategoriesController@update');
$router->delete('categories/{id}', 'CategoriesController@delete');
