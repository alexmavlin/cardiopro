<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class AchatDefibrillateurController extends Controller
{
    private $description = "Acheter un Défibrillateur au meilleur prix , bénéficiez du conseil de nos experts et demandez votre devis réponse dans la journée garantie.";
    private $keywords = "achat défibrillateur, défibrillateur achat, achat défibrillateur entreprise, achat défibrillateur automatique, achat défibrillateur automatique externe";
    private $canonical;
    private $title = "Achat et Vente de Défibrillateur Automatique à Partir de 1190 €";

    public function __construct()
    {
        $this->canonical = route('achat-defibrillateur');
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
                    'title' => "Spécialiste de l'achat de défibrillateur automatique",
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Offres',
                    'link' => "#",
                ],
                [
                    'name' => 'Achat défibrillateur',
                    'title' => "Achat défibrillateur entreprise",
                    'link' => route('achat-defibrillateur'),
                ],
            ],
        ];

        return view('pages/achat-defibrillateur', compact('data'));
    }
}
