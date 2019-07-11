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

use Illuminate\Support\Facades\Storage;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('auth', 'UserController@checkAuth');

//$router->get
$router->get('teste', function () {
    $s3 = Storage::disk('s3');
    $s3->put('meu_lumne_s3_aws.txt', 'Este é um arquivo fictício com algum conteúdo', 'public');
});

$router->group(['namespace' => '\Rap2hpoutre\LaravelLogViewer'], function() use ($router) {
    $router->get('logs', 'LogViewerController@index');
});



//$router->get('user', 'UserController');
//$router->post('user', 'UserController');

//$router->post('upload-image', 'GalleryController@uploadImage');

//$router->get('gallery', 'GalleryController@index');
//$router->get('gallery-show', 'GalleryController@show');
//$router->post('gallery-store', 'GalleryController@store');
//$router->put('gallery', 'GalleryController');
//$router->patch('gallery', 'GalleryController');