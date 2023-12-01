<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefibrillateurSingleController extends Controller
{
    private $description = "Spécialiste de la location et l'achat de défibrillateur en France, Cardiopro vous accompagne dans votre acquisition de DAE ou DSA. Le défibrillateur Heartsine 360P posséde le degré de protection (IP56) le plus élevé des DAE disponibles sur le marché, il bénéficie de la technologie biphasique SCOPE, dont les électrodes exclusives émettent des ondes progressives à faible consommation d’énergie qui s’adaptent aux variations d’impédance du patient. Vous souhaitez connaitre le prix des défibrillateurs ou installer un défibrillateur au sein de votre entreprise ou vous avez l'obligation d'acheter un défibrillateur en tant que ERP ? Contacter Cardiopro, spécialiste du défibrillateur en France.";
    private $keywords = "défibrillateur automatique";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('defibrillateur-single');
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
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Nos Défibrillateurs et les prix',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Défibrillateur Automatique',
                    'link' => route('defibrillateur-single'),
                ],
            ],
        ];

        return view('pages/defibrillateur-single', compact('data'));
    }
}
