<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class LexiqueController extends Controller
{
    private $description = "Définition et lexique défibrillateur : ACS, Arythmie et Asystolie, Chaîne de survie, Choquer un patient, Défibrillation externe, DEA, DSA, DAE, Défibrillation précoce, Électrocardiogramme, Fibrillation ventriculaire, Mort subite, Réanimation cardio-pulmonaire, Tachycardie ventriculaire.";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('lexique-defibrillateur');
    }

    public function __invoke()
    {
        $data = [
            'description' => $this->description,
            'keywords' => $this->keywords,
            'canonical' => $this->canonical,
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'link' => route('index'),
                ],
                [
                    'name' => 'Sauvons des Vies',
                    'link' => '#',
                ],
                [
                    'name' => 'Lexique',
                    'link' => route('lexique-defibrillateur'),
                ],
            ],
        ];

        return view('pages/lexique-defibrillateur', compact('data'));
    }
}
