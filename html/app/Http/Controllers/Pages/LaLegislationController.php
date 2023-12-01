<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class LaLegislationController extends Controller
{
    private $description = "La loi concernant la possession et l’installation de défibrillateur est très stricte. La législation française oblige les entreprises et les ERP à s’équiper d’un défibrillateur automatisé ou semi-automatique depuis janvier 2022 afin de toujours plus réduire le nombre de morts du aux arrêts cardiaques.";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('legislation-defibrillateur');
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
                    'name' => 'La Législation',
                    'link' => route('legislation-defibrillateur'),
                ],
            ],
        ];

        return view('pages/legislation-defibrillateur', compact('data'));
    }
}
