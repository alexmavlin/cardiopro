<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController')->name('index');

Route::group(['namespace' => 'Mailer', 'prefix' => 'email'], function() {
    Route::post('/send', 'SendContactController@sendContactPage')->name('send-main-contact');
    Route::post('/send-form-3', 'SendContactController@sendForm3')->name('send-form-3');
    Route::post('/send-form-2', 'SendContactController@sendForm2')->name('send-form-2');
    Route::post('/send-form-1', 'SendContactController@sendForm1')->name('send-form-1');
    Route::post('/send-choisir', 'SendContactController@sendChoisir')->name('send-choisir');
});

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
    Route::get('/defibrillateur-automatique', 'DefibrillateurSingleController')->name('defibrillateur-single');
    Route::get('/livraison-installation-defibrillateur', 'LivraisonInstallationDefibrillateurController')->name('livraison-installation-defibrillateur');
    Route::get('/obligations', 'ObligationsController')->name('obligations');

    /* Nos Offers */
    Route::get('/location-defibrillateur', 'LocationDefibrillateurController')->name('location-defibrillateur');
    Route::get('/achat-defibrillateur', 'AchatDefibrillateurController')->name('achat-defibrillateur');
    Route::get('/maintenance-defibrillateur', 'MaintenanceDefibrillateurController')->name('maintenance-defibrillateur');
    Route::get('/form', 'FormController')->name('form');

    Route::group(['namespace' => 'Accessories', 'prefix' => 'accessoire'], function() {
        Route::get('/accessoire-defibrillateur-boitier-Aivia-100', 'accessoireDefibrillateurBoitierAivia100Controller')->name('accessoire-defibrillateur-boitier-Aivia-100');
        Route::get('/accessoire-defibrillateur-trousse-de-secours', 'accessoireDefibrillateurTrousseDeSecoursController')->name('accessoire-defibrillateur-trousse-de-secours');
        Route::get('/accessoire-defibrillateur-boitier-DAC-350', 'accessoireDefibrillateurBoitierDAC350Controller')->name('accessoire-defibrillateur-boitier-DAC-350');
        Route::get('/accessoire-defibrillateur-pack-trainer', 'accessoireDefibrillateurPackTrainerController')->name('accessoire-defibrillateur-pack-trainer');
        Route::get('/accessoire-defibrillateur-padpak-adulte', 'accessoireDefibrillateurPadpakAdulteController')->name('accessoire-defibrillateur-padpak-adulte');
        Route::get('/accessoire-defibrillateur-padpak-pédiatrique', 'accessoireDfibrillateurPadpakPediatriqueController')->name('accessoire-defibrillateur-padpak-pédiatrique');
        Route::get('/accessoire-defibrillateur-Samaritan-PAD-Trainer', 'accessoireDefibrillateurSamaritanPADTrainerController')->name('accessoire-defibrillateur-Samaritan-PAD-Trainer');
        Route::get('/accessoire-defibrillateur-signaletique-autocollante', 'accessoireDefibrillateurSignaletiqueAutocollanteController')->name('accessoire-defibrillateur-signaletique-autocollante');
        Route::get('/accessoire-defibrillateur-support-mural-plexiglass', 'accessoireDefibrillateurSupportMuralPlexiglassController')->name('accessoire-defibrillateur-support-mural-plexiglass');
    });

    Route::get('/entreprise', 'EntrepriseController')->name('entreprise');
    Route::get('/hotel', 'HotelController')->name('hotel');
    Route::get('/mairie', 'MairieController')->name('mairie');
    Route::get('/erp', 'ErpController')->name('erp');
    Route::get('/ehpad', 'EhpadController')->name('ehpad');
    Route::get('/medical', 'MedicalController')->name('medical');
});

Auth::routes();

Route::group(['namespace' => 'ServiceRoutes'], function() {
    Route::get('/optimize', 'ServiceController@optimize');
    Route::get('/migrate', 'ServiceController@migrate');
    Route::get('/migrate-rollback', 'ServiceController@migrate_rollback');
});
