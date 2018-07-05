<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index');

Route::post('/', 'IndexController@login');

Route::get('/logout', 'IndexController@logout');




Route::middleware(['auth', 'isAdmin'])
    ->prefix('admin')
    ->group(function (){

        Route::get('/', 'AdminController@index');

        Route::get('/create-user', 'AdminController@create');
        Route::post('/create-user', 'AdminController@store');

        Route::get('/delete-user/{user}', 'AdminController@delete');
        Route::post('/delete-user/{id}', 'AdminController@destroy');

        Route::get('/make-admin/{id}', 'AdminController@makeAdmin');
        Route::get('/remove-admin/{id}', 'AdminController@removeAdmin');

    });




Route::middleware(['auth'])
    ->group(function (){

        Route::get('/home', function () {
            return view('index.home');
        });

        Route::get('/client-list', 'ClientController@index');

        Route::get('/client-list/create', 'ClientController@create');

        Route::post('/client-list', 'ClientController@store');

        Route::get('/client-list/{client}', 'ClientController@show');

        Route::get('/client-list/edit/{client}', 'ClientController@edit');
        Route::post('/client-list/edit/{id}', 'ClientController@update');

        Route::get('/client-list/delete/{client}', 'ClientController@delete');
        Route::post('/client-list/delete/{id}', 'ClientController@destroy');




        Route::get('/client-list/comment/{id}', 'ClientCommentController@index');
        Route::post('/client-list/comment/{client}', 'ClientCommentController@store');

        Route::get('/client-list/comm-del/{comment}', 'ClientCommentController@delete');
        Route::post('/client-list/comm-del/{id}', 'ClientCommentController@destroy');




        Route::get('/project-list', 'ProjectController@index');

        Route::get('/project-list/create', 'ProjectController@create');

        Route::post('/project-list', 'ProjectController@store');

        Route::get('/project-list/{project}', 'ProjectController@show');

        Route::get('/project-list/edit/{project}', 'ProjectController@edit');
        Route::post('/project-list/edit/{id}', 'ProjectController@update');

        Route::get('/project-list/delete/{project}', 'ProjectController@delete');
        Route::post('/project-list/delete/{id}', 'ProjectController@destroy');




        Route::get('/project-list/comment/{id}', 'ProjectCommentController@index');
        Route::post('/project-list/comment/{project}', 'ProjectCommentController@store');

        Route::get('/project-list/comm-del/{comment}', 'ProjectCommentController@delete');
        Route::post('/project-list/comm-del/{id}', 'ProjectCommentController@destroy');




        Route::get('/archive', 'FileController@index');

        Route::get('/archive/create', 'FileController@create');

        Route::post('/archive', 'FileController@store');

        Route::get('/archive/{file}', 'FileController@show');

        Route::get('archive/delete/{file}', 'FileController@delete');

        Route::post('archive/delete/{file}', 'FileController@destroy');

        Route::get('archive/download/{name}', 'FileController@download');

        Route::get('/project-list/filterby/{filter}', 'ProjectController@filter');




        Route::get('change-password', 'PasswordController@index');
        Route::post('change-password', 'PasswordController@change');


});