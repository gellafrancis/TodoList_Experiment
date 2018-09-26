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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new' , [
    'uses' => 'PagesController@new' // pass array and new is the name of the method
]);

Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as'=> 'todos'
]);

Route::post('/create/todo' , [
    'uses' => 'TodosController@store'
]);

Route::get('todo/delete/{id}' , [
    'uses' => 'TodosController@delete',
    'as' => 'todo.delete' //name of the path
]);

Route::get('todo/update/{id}' , [
    'uses' => 'TodosController@update',
    'as' => 'todo.update' //name of the path
]);

Route::post('/todo/save/{id}' , [
    'uses' => 'TodosController@save',
    'as' => 'todo.save'
]);

Route::get('/todo/completed/{id}' , [
    'uses' => 'TodosController@completed',
    'as' => 'todo.completed'
]);





