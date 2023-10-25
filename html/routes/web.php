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
