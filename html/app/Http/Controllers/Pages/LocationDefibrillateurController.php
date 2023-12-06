<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class LocationDefibrillateurController extends Controller
{
    private $description = "La location d'un défibrillateur, c'est un pack clé en main vous permettant de bénéficier d'un service de maintenance connectée efficace à un prix abordable.";
    private $keywords = "Location défibrillateur";
    private $title = "Location de Défibrillateur Automatique Louer un DAE pour 39€ par Mois";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('location-defibrillateur');
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
                    'name' => 'Nos Offres',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Location de défibrillateur',
                    'link' => route('location-defibrillateur'),
                ],
            ],
        ];

        return view('pages/location-defibrillateur', compact('data'));
    }
}
