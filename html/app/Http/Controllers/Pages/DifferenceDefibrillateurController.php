<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DifferenceDefibrillateurController extends Controller
{
    private $description = "Projetez vous d'investir dans un DAE ? Trouvez toutes les informations essentielles pour choisir sereinement votre Défibrillateur Automatique Externe.";
    private $keywords = "défibrillateur utilisation";
    private $title = "Spécialiste du DAE (défibrillateur automatisé externe) Devis en Ligne &#10084;";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('difference-defibrillateur');
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
                    'name' => 'Différence DAE DSA',
                    'link' => route('difference-defibrillateur'),
                ],
            ],
        ];

        return view('pages/difference-defibrillateur', compact('data'));
    }
}
