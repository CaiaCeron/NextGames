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


Route::get('/', function() {
    return view('layout_admin.index');
})->name('admin.inicio');

Route::get('/fornecedores', 'FornecedoresController@pagFornecedores')->name('admin.fornecedor');

Route::get('/formFornecedor', 'FornecedoresController@formCad')->name('admin.fornecedor.form');

Route::post('/cadFornecedor', 'FornecedoresController@cadastrar')->name('admin.fornecedor.cad');

Route::get('/editFornecedores/{id}', 'FornecedoresController@formEdit')->name('admin.fornecedor.edit');

Route::post('/atualiza', 'FornecedoresController@atualizar')->name('admin.fornecedor.atualiza');





