<?php

namespace App\Http\Controllers\Pages\Accessories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accessoireDefibrillateurTrousseDeSecoursController extends Controller
{
    // accessoire-defibrillateur-trousse-de-secours

    private $description = "Le pack sauveteur défibrillateur est un kit qui contient tout le petit équipement et les accessoires nécessaires pour effectuer les gestes de premiers secours, et pour correctement utiliser le défibrillateur cardiaque. Vous souhaitez acquérir une Trousse de Secours ou connaitre le prix des défibrillateurs, installer un défibrillateur automatique au sein de votre entreprise ou vous avez l'obligation d'acheter un défibrillateur en tant que ERP ? Contacter Cardiopro, LE spécialiste du défibrillateur en France.";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('accessoire-defibrillateur-trousse-de-secours');
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
                    'name' => 'Nos Produits',
                    'link' => '#',
                ],
                [
                    'name' => 'Accessoires',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Trousse de Secours',
                    'link' => route('accessoire-defibrillateur-trousse-de-secours'),
                ],
            ],
        ];

        return view('pages/accessories/accessoire-defibrillateur-trousse-de-secours', compact('data'));
    }
}
