<?php

namespace App\Http\Controllers\Pages\Accessories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accessoireDefibrillateurPadpakAdulteController extends Controller
{
    // accessoire-defibrillateur-padpak-adulte

    private $description = "Le PadPak adulte est le kit qui contient le pack de piles et d’électrodes pour les défibrillateurs Samaritan PAD. Sa durée de vie est de 4 ans, il peut administrer minimum 30 chocs de 200J. Vous souhaitez acquérir un Padpak Adulte ou connaitre le prix des défibrillateurs, installer un défibrillateur automatique au sein de votre entreprise ou vous avez l'obligation d'acheter un défibrillateur en tant que ERP ? Contacter Cardiopro, LE spécialiste du défibrillateur en France.";
    private $keywords = "";
    private $title = "Accessoire Défibrillateur Padpak Adulte | CardioPro spécialiste de la location et l'achat de Défibrillateur en France";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('accessoire-defibrillateur-padpak-adulte');
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
                    'name' => 'PadPak adultes',
                    'link' => route('accessoire-defibrillateur-padpak-adulte'),
                ],
            ],
        ];

        return view('pages/accessories/accessoire-defibrillateur-padpak-adulte', compact('data'));
    }
}
