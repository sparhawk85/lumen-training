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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('example/{word}', 'ExampleController@hello');
$app->get('user', 'UserController@index');
$app->get('user/edit/{id}', 'UserController@edit');
$app->post('user/update/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);

$app->get('hello', 'ExampleController@helloWithFullName');
$app->get('api', ['middleware' => 'auth',  'uses' => 'ExampleController@api']);