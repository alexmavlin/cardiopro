<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class EhpadController extends Controller
{
    private $description = "Les EHPAD ont obligation de faire installer des défibrillateurs dans leurs locaux depuis le 1er janvier 2022. La sanction pour non-conformité est lourde car ses établissements accueillent une clientèle à haut risque et se doivent d’être en capacité de porter secours à une victime de malaise cardiaque.";
    private $keywords = "défibrillateur ephad";
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
                    'name' => 'Défibrillateur EPHAD',
                    'link' => route('ehpad'),
                ],
            ],
        ];

        return view('pages/ehpad', compact('data'));
    }
}
