<?php

namespace App\Http\Controllers\Pages\Accessories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accessoireDefibrillateurPackTrainerController extends Controller
{
    // accessoire-defibrillateur-pack-trainer

    private $description = "Le pack comprend le défibrillateur d&#39;entraînement XFT120 C + et le mannequin Practi – un sac de transport est fourni. Le défibrillateur d&#39;entraînement est conçu pour enseigner et s’entraîner à l&#39;utilisation des défibrillateurs externes automatiques (DAE). Vous souhaitez acquérir un Défibrillateur d'entrainement (Pack Trainer) ou connaitre le prix des défibrillateurs, installer un défibrillateur automatique au sein de votre entreprise ou vous avez l'obligation d'acheter un défibrillateur en tant que ERP ? Contacter Cardiopro, LE spécialiste du défibrillateur en France.";
    private $keywords = "";
    private $title = "Accessoire Défibrillateur d'entrainement (Pack Trainer) | CardioPro spécialiste de la location et l'achat de Défibrillateur en France";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('accessoire-defibrillateur-pack-trainer');
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
                    'name' => 'Pack trainer : défibrillateur de formation & mannequin',
                    'link' => route('accessoire-defibrillateur-pack-trainer'),
                ],
            ],
        ];

        return view('pages/accessories/accessoire-defibrillateur-pack-trainer', compact('data'));
    }
}
