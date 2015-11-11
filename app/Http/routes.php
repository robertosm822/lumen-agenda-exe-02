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

//$app->get('/', function () use ($app) {
 //   return $app->welcome();
//});
$app->get('/',[
    'as' => 'agenda',
    'uses' => 'AgendaController@index'
]);

$app->get('/{letra}',[
    'as' => 'agenda.letra',
    'uses' => 'AgendaController@index'
]);

$app->get('/{id}/apagar', [
    'as' => 'partials.apagar', 'uses' => 'AgendaController@apagar'
]);

$app->get('/{id}/destroy', [
    'as' => 'agenda', 'uses' => 'AgendaController@destroy'
]);

$app->get('/{id}/deltelefone', [
    'as' => 'partial.telefone', 'uses' => 'AgendaController@apagarTelefone'
]);