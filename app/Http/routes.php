<?php

use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->get('/', ['uses' => 'FilinziController@welcome']);
$router->get('/exists-yes', ['uses' => 'FilinziController@existsYes']);
$router->get('/exists-no', ['uses' => 'FilinziController@existsNo']);
$router->get('/pass-data-key-value', ['uses' => 'FilinziController@passDataKeyValue']);
$router->get('/pass-data-with-method', ['uses' => 'FilinziController@passDataWithMethod']);

