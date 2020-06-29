<?php

Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@getDashboard')->name('dashboard');

    // Modulo de Usuarios
    Route::get('/users/{status}', 'Admin\UserController@getUsers')->name('user_list');
    Route::get('/user/{id}/edit', 'Admin\UserController@getUserEdit')->name('user_edit');
    Route::get('/user/{id}/banned', 'Admin\UserController@getUserBanned')->name('user_banned');
    
});


