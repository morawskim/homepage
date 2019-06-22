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

$router->get('/', function () use ($router) {
    $cvContent = file_get_contents(realpath(resource_path() . '/md/cv.md'));
    $parsedown = new Parsedown();
    return view('cv', ['content' => $parsedown->parse($cvContent)]);
});
