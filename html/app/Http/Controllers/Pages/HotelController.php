<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    private $description = "Un hôtel ou un restaurant a l'obligation d’être munit d’un défibrillateur automatique externe depuis janvier 2022, car faisant parti des ERP de catégorie 5. Un DAE peut être efficacement utilisé par tout non-médecin grâce à son système automatisé et sa prise en mains facile.";
    private $keywords = "défibrillateur restaurant, défibrillateur obligatoire restaurant, obligation défibrillateur restaurant, défibrillateur hotel, défibrillateur obligatoire hotel (10)";
    private $canonical;
    private $title = "Défibrillateur pour restaurant et hotel, Obligatoire au 1er Janvier 2022 | Nos Solutions | Spécialiste du Défibrillateur | CardioPro";

    public function __construct()
    {
        $this->canonical = route('hotel');
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
                    'title' => "Achat et location défibrillateur",
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Solutions',
                    'link' => "#",
                ],
                [
                    'name' => 'Défibrillateur Hotel et Restaurant',
                    'title' => "Défibrillateur hotel restaurant obligation",
                    'link' => route('hotel'),
                ],
            ],
        ];

        return view('pages/hotel', compact('data'));
    }
}
