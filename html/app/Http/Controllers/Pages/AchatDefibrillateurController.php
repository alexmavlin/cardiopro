<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class AchatDefibrillateurController extends Controller
{
    private $description = "Acheter un Défibrillateur au meilleur prix , bénéficiez du conseil de nos experts et demandez votre devis réponse dans la journée garantie.";
    private $keywords = "achat défibrillateur, défibrillateur achat, achat défibrillateur entreprise, achat défibrillateur automatique, achat défibrillateur automatique externe";
    private $canonical;

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
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Offres',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Achat défibrillateur',
                    'link' => route('achat-defibrillateur'),
                ],
            ],
        ];

        return view('pages/achat-defibrillateur', compact('data'));
    }
}
