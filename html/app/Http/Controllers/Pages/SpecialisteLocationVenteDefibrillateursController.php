<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialisteLocationVenteDefibrillateursController extends Controller
{
    private $description = "Depuis 2007, CardioPro s’est donné pour mission de démocratiser et faciliter l’accès au défibrillateur externe automatisé. Spécialiste des DAE, notre équipe s’engage dans un suivi permanent de votre matériel de l’installation jusqu’à la maintenance, afin de sauver toujours plus de vies.";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('faq');
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
                    'link' => route('specialiste-location-vente-defibrillateurs'),
                ],
                [
                    'name' => 'Nos Offres',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Formule location et achat DAE',
                    'link' => route('specialiste-location-vente-defibrillateurs'),
                ],
            ],
        ];

        return view('pages/specialiste-location-vente-defibrillateurs', compact('data'));
    }
}
