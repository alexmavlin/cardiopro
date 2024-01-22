<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PolitiqueDeConfidentialiteController extends Controller
{
    private $description = "Découvrez notre gamme de défibrillateur et les prix correspondant à chaque offre d’achat ou de location de DAE. Nous avons sélectionné trois défibrillateurs didactiques pour guider pas-à-pas le secouriste : HeartSine 350P, HeartSine 360P et Physio Control CR2. Notre équipe se tient à votre disposition afin de répondre à toutes vos questions relatives à l’installation, à l’utilisation et à la maintenance de votre défibrillateur.";
    private $canonical;
    private $title = "CardioPro.fr | Politique de confidentialite";
    private $keywords = "défibrillateur prix";

    public function __construct()
    {
        $this->canonical = route('politique-de-confidentialite');
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
                    'name' => 'Home',
                    'title' => "Défibrillateur prix",
                    'link' => route('index'),
                ],
                [
                    'name' => 'Politique de confidentialite',
                    'title' => "Offres pour l'achat ou la location de défibrillateur",
                    'link' => route('politique-de-confidentialite'),
                ],
            ],
        ];

        return view('pages.politique-de-confidentialite', compact('data'));
    }
}
