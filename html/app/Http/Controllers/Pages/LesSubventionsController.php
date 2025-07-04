<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class LesSubventionsController extends Controller
{
    private $description = "Le gouvernement français propose des subventions pour certaines entreprises et ERP dans l'obligation de s'équiper depuis janvier 2022. Ces subventions permettent de déduire une grande partie du coût d’achat ou de location du défibrillateur couvrant jusqu’à 70% du prix.";
    private $keywords = "défibrillateurs";
    private $title = "Subvention pour l'installation de Défibrillateur | Sauvons des vies | Spécialiste du Défibrillateur Automatisé Externe | CardioPro";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('subventions-defibrillateur');
    }

    public function __invoke()
    {
        $data = [
            'description' => $this->description,
            'keywords' => $this->keywords,
            'canonical' => $this->canonical,
            'title' => $this->title,
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Produits',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'FAQ Défibrillateur',
                    'link' => route('subventions-defibrillateur'),
                ],
            ],
        ];

        return view('pages/subventions-defibrillateur', compact('data'));
    }
}
