<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class MedicalController extends Controller
{
    private $description = "Tout centre de soins a obligation de s’équiper d’un défibrillateur depuis janvier 2022. Cela concerne aussi bien les cabinets de médecins généralistes, dentaires, infirmiers que les centres d’analyses médicales, qui accueillent une clientèle à risque.";
    private $keywords = "Défibrillateur centre de soins, Défibrillateur obligation centre de soins";
    private $canonical;
    private $title = "Défibrillateur en Centre de Soins, les Obligations au 1er Janvier 2022 | Nos Solutions | Spécialiste du DAE | CardioPro";

    public function __construct()
    {
        $this->canonical = route('medical');
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
                    'name' => 'Nos Solutions',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Défibrillateur Centre de Soins',
                    'link' => route('medical'),
                ],
            ],
        ];

        return view('pages/medical', compact('data'));
    }
}
