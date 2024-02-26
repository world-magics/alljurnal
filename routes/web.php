<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\JurnalController;
use App\Http\Controllers\Admin\AttributeGroupController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CategoryController;

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
    return view('auth.logins');
});

Auth::routes();


Route::group(['middleware' => 'auth'],function () {
    Route::name('admin.')->group( function (){
        Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

            //users
            Route::controller(UserController::class)->prefix('users')->name('users.')->group(function (){
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/delete/{id}', 'delete')->where('id', '[0-9]+')->name('delete');
                Route::get('/edit/{id}', 'edit')->where('id', '[0-9]+')->name('edit');
                Route::post('/update/{id}', 'update')->where('id', '[0-9]+')->name('update');
            });

            Route::controller(JurnalController::class)->prefix('journals')->name('journals.')->group(function (){
                Route::get('/','index')->name('index');
                Route::get('/create','create')->name('create');
            });

            //AttributeGroup
            Route::controller(AttributeGroupController::class)->prefix('attribute-group')->name('attribute-group.')->group(function (){
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/delete/{id}', 'delete')->where('id', '[0-9]+')->name('delete');
                Route::get('/edit/{id}', 'edit')->where('id', '[0-9]+')->name('edit');
                Route::post('/update/{id}', 'update')->where('id', '[0-9]+')->name('update');
            });

            //Attribute
            Route::controller(AttributeController::class)->prefix('attribute')->name('attribute.')->group(function (){
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/delete/{id}', 'delete')->where('id', '[0-9]+')->name('delete');
                Route::get('/edit/{id}', 'edit')->where('id', '[0-9]+')->name('edit');
                Route::post('/update/{id}', 'update')->where('id', '[0-9]+')->name('update');
            });

            //Category
            Route::controller(CategoryController::class)->prefix('category')->name('category.')->group(function (){
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/delete/{id}', 'delete')->where('id', '[0-9]+')->name('delete');
                Route::get('/edit/{id}', 'edit')->where('id', '[0-9]+')->name('edit');
                Route::post('/update/{id}', 'update')->where('id', '[0-9]+')->name('update');
            });

        });
    });
});
