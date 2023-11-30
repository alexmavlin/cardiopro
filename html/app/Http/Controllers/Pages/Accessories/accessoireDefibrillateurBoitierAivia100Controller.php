<?php

namespace App\Http\Controllers\Pages\Accessories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accessoireDefibrillateurBoitierAivia100Controller extends Controller
{
    //accessoire-defibrillateur-boitier-Aivia-100

    private $description = "Le boitier mural Aivia 100 intérieur est fait pour être utilisé en intérieur. Grâce à la détection automatique de la lumière, il offre un éclairage de jour comme de nuit (grâce à l&#39;éclairage LED quand aucune lumière n’est détectée). Vous souhaitez acquérir un Boitier Mural Aivia 100 ou connaitre le prix des défibrillateurs, installer un défibrillateur automatique au sein de votre entreprise ou vous avez l'obligation d'acheter un défibrillateur en tant que ERP ? Contacter Cardiopro, LE spécialiste du défibrillateur en France.";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('accessoire-defibrillateur-boitier-Aivia-100');
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
                    'name' => '',
                    'link' => route('accessoire-defibrillateur-boitier-Aivia-100'),
                ],
            ],
        ];

        return view('pages/accessories/accessoire-defibrillateur-boitier-Aivia-100', compact('data'));
    }
}
