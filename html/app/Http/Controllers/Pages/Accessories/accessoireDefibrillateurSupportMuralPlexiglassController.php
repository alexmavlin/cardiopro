<?php

namespace App\Http\Controllers\Pages\Accessories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accessoireDefibrillateurSupportMuralPlexiglassController extends Controller
{
    // accessoire-defibrillateur-support-mural-plexiglass

    private $description = "Avec ce kit support mural pour DAE, placez stratégiquement votre défibrillateur afin qu&#39;il reste dans de bonnes conditions de stockage. Sa signalétique permettra aux employés et visiteurs de savoir rapidement où il se trouve. Fait en plastique transparent, il répond parfaitement aux règles standard. Vous souhaitez acquérir un support mural ou connaitre le prix des défibrillateurs, installer un défibrillateur automatique au sein de votre entreprise ou vous avez l'obligation d'acheter un défibrillateur en tant que ERP ? Contacter Cardiopro, LE spécialiste du défibrillateur en France.";
    private $keywords = "";
    private $title = "Accessoire Défibrillateur support mural | CardioPro spécialiste de la location et l'achat de Défibrillateur en France";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('accessoire-defibrillateur-support-mural-plexiglass');
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
                    'name' => 'Accessoires',
                    'link' => route('accessoires-defibrillateurs'),
                ],
                [
                    'name' => 'Support mural en plexiglass',
                    'link' => route('accessoire-defibrillateur-support-mural-plexiglass'),
                ],
            ],
        ];

        return view('pages/accessories/accessoire-defibrillateur-support-mural-plexiglass', compact('data'));
    }
}
