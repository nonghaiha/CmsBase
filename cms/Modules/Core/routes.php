<?php

use Cms\Modules\Core\Controllers\Admin\HomeController;

Route::group([
    'prefix' => '',
    'namespace' => 'Cms\Modules\Core\Controllers',
    'middleware' => 'web',
], function () {
    Route::get('/', 'CoreController@welcome')->name('core.welcome');

    //ADMIN
    Route::group(['namespace' => 'Admin','prefix' => 'admin'], function (){
        Route::get('',[HomeController::class, 'index'])->name('admin.index');
    });
});
