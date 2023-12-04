<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class MairieController extends Controller
{
    private $description = "En tant qu’ERP, une mairie a l’obligation stricte d’être équipée d’un défibrillateur et également d’en équiper tous les différents locaux dont elle est responsable : Gymnase, stade, théâtre, salle des fêtes ou hôtel de ville. Dans le cas contraire elle s’expose à de graves répercutions légales.";
    private $keywords = "Défibrillateur mairie, Défibrillateur obligation mairie";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('mairie');
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
                    'name' => 'Nos Solutions',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Mairie',
                    'link' => route('mairie'),
                ],
            ],
        ];

        return view('pages/mairie', compact('data'));
    }
}
