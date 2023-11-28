<?php

namespace App\Http\Controllers\Pages\Accessories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accessoireDefibrillateurBoitierDAC350Controller extends Controller
{
    // accessoire-defibrillateur-boitier-DAC-350

    private $description = "Le boitier mural DAC-350 a été développé et testé pour être posé en extérieur et résister aux intempéries. Permettant d&#39;accueillir tous les défibrillateurs, il est fabriqué en acier inoxydable et dispose d&#39;une large fenêtre en plexiglas pour faciliter la vérification visuelle du défibrillateur. Vous souhaitez acquérir un boitier mural DAC-350 ou connaitre le prix des défibrillateurs, installer un défibrillateur automatique au sein de votre entreprise ou vous avez l'obligation d'acheter un défibrillateur en tant que ERP ? Contacter Cardiopro, LE spécialiste du défibrillateur en France.";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('accessoire-defibrillateur-boitier-DAC-350');
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
                    'name' => 'Nos Défibrillateurs et les prix',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Boitier Mural DAC-350',
                    'link' => route('accessoire-defibrillateur-boitier-DAC-350'),
                ],
            ],
        ];

        return view('pages/accessories/accessoire-defibrillateur-boitier-DAC-350', compact('data'));
    }
}
