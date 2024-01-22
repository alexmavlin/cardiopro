<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class EntrepriseController extends Controller
{
    private $description = "Défibrillateur pour les Entreprises découvrez nos formules et les nouvelles obligations  tout inclus cliquez pour recevoir votre devis en moins de 24H.";
    private $keywords = "défibrillateur entreprise, défibrillateur pour entreprise, défibrillateur obligation entreprise, achat défibrillateur entreprise, défibrillateur obligatoire entreprise";
    private $canonical;
    private $title = "Défibrillateur en Entreprise, les Obligations pour 2023";

    public function __construct()
    {
        $this->canonical = route('entreprise');
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
                    'title' => "Achat et location défibrillateur pour entreprise",
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Offres',
                    'link' => "#",
                ],
                [
                    'name' => 'Défibrillateur Mairie',
                    'title' => "Défibrillateur entreprise obligation",
                    'link' => route('entreprise'),
                ],
            ],
        ];

        return view('pages/entreprise', compact('data'));
    }
}
