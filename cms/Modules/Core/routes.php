<?php

use Cms\Modules\Core\Controllers\Admin\HomeController;
use Cms\Modules\Core\Controllers\Admin\CategoryController;

Route::group([
    'prefix' => '',
    'namespace' => 'Cms\Modules\Core\Controllers',
    'middleware' => 'web',
], function () {
    Route::get('/', 'CoreController@welcome')->name('core.welcome');

    //ADMIN
    Route::group(['namespace' => 'Admin','prefix' => 'admin', 'middleware' => ['auth:sanctum', 'verified']], function (){
        Route::get('',[HomeController::class, 'index'])->name('admin.index');

        //CATEGORIES
        Route::group(['prefix' => 'category'], function (){
           Route::get('/',[CategoryController::class, 'index'])->name('admin.category.index');
        });
    });
});
