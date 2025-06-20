<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefibrillateurPrixController extends Controller
{
    private $description = "Le prix d'un défibrillateur varie entre 1190€ et 1990€. Cliquez pour obtenir un devis adaptée à vos besoins et un prix pour votre équipement en défibrillateur.";
    private $keywords = "défibrillateur prix";
    private $title = "Défibrillateur au prix de 39€ en Location et 1190€ à l'achat Devis Express";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('defibrillateur-prix');
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
                    'name' => 'Défibrillateurs et Prix',
                    'link' => route('defibrillateur-prix'),
                ],
            ],
        ];

        return view('pages/defibrillateur-prix', compact('data'));
    }
}
