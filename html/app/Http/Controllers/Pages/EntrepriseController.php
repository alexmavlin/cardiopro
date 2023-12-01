<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class EntrepriseController extends Controller
{
    private $description = "Défibrillateur pour les Entreprises découvrez nos formules et les nouvelles obligations  tout inclus cliquez pour recevoir votre devis en moins de 24H.";
    private $keywords = "défibrillateur entreprise, défibrillateur pour entreprise, défibrillateur obligation entreprise, achat défibrillateur entreprise, défibrillateur obligatoire entreprise";
    private $canonical;

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
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Solutions',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Location de défibrillateur',
                    'link' => route('entreprise'),
                ],
            ],
        ];

        return view('pages/entreprise', compact('data'));
    }
}
