<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CGVController extends Controller
{
    private $description = "Découvrez notre gamme de défibrillateur et les prix correspondant à chaque offre d’achat ou de location de DAE. Nous avons sélectionné trois défibrillateurs didactiques pour guider pas-à-pas le secouriste : HeartSine 350P, HeartSine 360P et Physio Control CR2. Notre équipe se tient à votre disposition afin de répondre à toutes vos questions relatives à l’installation, à l’utilisation et à la maintenance de votre défibrillateur.";
    private $canonical;
    private $title = "CardioPro.fr | Conditions Générales de Vente";
    private $keywords = "défibrillateur prix";

    public function __construct()
    {
        $this->canonical = route('cgv');
    }

    public function __invoke()
    {
        $data = [
            'description' => $this->description,
            'title' => $this->title,
            'keywords' => $this->keywords,
            'canonical' => $this->canonical,
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'link' => route('index'),
                ],
                [
                    'name' => 'Conditions Générales de Vente',
                    'link' => route('cgv'),
                ],
            ],
        ];

        return view('pages.cgv', compact('data'));
    }
}
