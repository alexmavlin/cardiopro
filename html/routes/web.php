<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController')->name('index');

Route::group(['namespace' => 'Pages'], function() {
    Route::get('/defibrillateurs-foire-aux-questions', 'DefibrillateursFoireAuxQuestionsController')->name('faq');
    Route::get('/contact', 'ContactController')->name('contact');
    Route::get('/formule-location-achat-dae-dsa', 'FormuleLocationAchatDaeDsaController')->name('formule-dae-dsa');
});

Auth::routes();

Route::group(['namespace' => 'ServiceRoutes'], function() {
    Route::get('/optimize', 'ServiceController@optimize');
    Route::get('/migrate', 'ServiceController@migrate');
    Route::get('/migrate-rollback', 'ServiceController@migrate_rollback');
});
