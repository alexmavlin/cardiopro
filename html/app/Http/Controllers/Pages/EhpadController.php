<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class EhpadController extends Controller
{
    private $description = "Les EHPAD ont obligation de faire installer des défibrillateurs dans leurs locaux depuis le 1er janvier 2022. La sanction pour non-conformité est lourde car ses établissements accueillent une clientèle à haut risque et se doivent d’être en capacité de porter secours à une victime de malaise cardiaque.";
    private $keywords = "défibrillateur ephad";
    private $title = "Défibrillateur pour les EPHAD, toutes les Obligations depuis 2020 | Nos Solutions | Spécialiste du DAE | CardioPro";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('ehpad');
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
                    'title' => "Achat et location défibrillateur pour les Ephad",
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Offres',
                    'link' => "#",
                ],
                [
                    'name' => 'Défibrillateur EPHAD',
                    'title' => "Obligation défibrillateur EPHAD",
                    'link' => route('ehpad'),
                ],
            ],
        ];

        return view('pages/ehpad', compact('data'));
    }
}
