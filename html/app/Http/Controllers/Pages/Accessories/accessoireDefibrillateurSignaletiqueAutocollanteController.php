<?php

namespace App\Http\Controllers\Pages\Accessories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accessoireDefibrillateurSignaletiqueAutocollanteController extends Controller
{
    // accessoire-defibrillateur-signaletique-autocollante

    private $description = "Très simples mais nécessaires pour rassurer les utilisateurs des lieux en faisant savoir que le site est équipé de défibrillateurs et rapidement les guider en cas de besoin, ils sont à placer dans l&#39;entrée, la salle d&#39;attente et la salle principale. Vous souhaitez acquérir une signalétique autocollante ou connaitre le prix des défibrillateurs, installer un défibrillateur automatique au sein de votre entreprise ou vous avez l'obligation d'acheter un défibrillateur en tant que ERP ? Contacter Cardiopro, LE spécialiste du défibrillateur en France.";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('accessoire-defibrillateur-signaletique-autocollante');
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
                    'name' => 'Signalétique autocollante',
                    'link' => route('accessoire-defibrillateur-signaletique-autocollante'),
                ],
            ],
        ];

        return view('pages/accessories/accessoire-defibrillateur-signaletique-autocollante', compact('data'));
    }
}
