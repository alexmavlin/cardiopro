<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController')->name('index');

Route::group(['namespace' => 'Pages'], function() {
    Route::get('/defibrillateurs-foire-aux-questions', 'DefibrillateursFoireAuxQuestionsController')->name('faq');
    Route::get('/contact', 'ContactController')->name('contact');
    Route::get('/formule-location-achat-dae-dsa', 'FormuleLocationAchatDaeDsaController')->name('formule-dae-dsa');
    Route::get('/specialiste-location-vente-defibrillateurs', 'SpecialisteLocationVenteDefibrillateursController')->name('specialiste-location-vente-defibrillateurs');
    Route::get('/nos-valeurs-entreprise-vente-defibrillateur-automatise-externe', 'NosValeursEntrepriseVenteDefibrillateurAutomatiseExterneController')->name('nos-valeurs-entreprise-vente-defibrillateur-automatise-externe');
    Route::get('/posts', 'BlogIndexController')->name('posts');
    Route::get('/post/defibrillateur-pour-particulier', 'BlogSingleController')->name('posts-single');
    Route::get('/defibrillateur-cardiaque-cest-quoi', 'DefibrillateurCardiaqueCestQuoiController')->name('defibrillateur-cardiaque-cest-quoi');
    Route::get('/reconnaitre-un-arret-cardiaque', 'ReconnaitreUnArretCardiaqueController')->name('reconnaitre-un-arret-cardiaque');
    Route::get('/chiffres-cles-arret-cardiaque', 'LesShiffresLesController')->name('chiffres-cles-arret-cardiaque');
    Route::get('/legislation-defibrillateur', 'LaLegislationController')->name('legislation-defibrillateur');
    Route::get('/lexique-defibrillateur', 'LexiqueController')->name('lexique-defibrillateur');
    Route::get('/subventions-defibrillateur', 'LesSubventionsController')->name('subventions-defibrillateur');
    /* Dynamicals */
    Route::get('/defibrillateur-prix', 'DefibrillateurPrixController')->name('defibrillateur-prix');
    Route::get('/difference-defibrillateur', 'DifferenceDefibrillateurController')->name('difference-defibrillateur');
    Route::get('/accessoires-defibrillateurs', 'AccessoiresDefibrillateursController')->name('accessoires-defibrillateurs');
    Route::get('/defibrillateur-single', 'DefibrillateurSingleController')->name('defibrillateur-single');
    Route::get('/livraison-installation-defibrillateur', 'LivraisonInstallationDefibrillateurController')->name('livraison-installation-defibrillateur');
    Route::get('/obligations', 'ObligationsController')->name('obligations');
});

Auth::routes();

Route::group(['namespace' => 'ServiceRoutes'], function() {
    Route::get('/optimize', 'ServiceController@optimize');
    Route::get('/migrate', 'ServiceController@migrate');
    Route::get('/migrate-rollback', 'ServiceController@migrate_rollback');
});
