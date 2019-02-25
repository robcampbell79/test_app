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

Route::get('/mytest', function () {

  $mytestModel;

  $this->mytestModel = new \App\Mytest();

  $data = $this->mytestModel->Call();

  return view('mytest.index')->with('data', $data);

});
