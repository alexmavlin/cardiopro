<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialisteLocationVenteDefibrillateursController extends Controller
{
    private $description = "Depuis 2007, CardioPro s’est donné pour mission de démocratiser et faciliter l’accès au défibrillateur externe automatisé. Spécialiste des DAE, notre équipe s’engage dans un suivi permanent de votre matériel de l’installation jusqu’à la maintenance, afin de sauver toujours plus de vies.";
    private $keywords = "";
    private $title = "Entreprise spécialisée en Défibrillateur Externe Automatisé | Spécialiste du Défibrillateur Automatique | CardioPro";
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
            'title' => $this->title,
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'title' => 'Spécialiste de la vente et la location de défibrillateur',
                    'link' => route('index'),
                ],
                [
                    'name' => "L'Entreprise",
                    'link' => '#',
                ],
                [
                    'name' => 'Qui sommes nous ?',
                    'title' => "Spécialiste en défibrillateur automatisé externe",
                    'link' => route('specialiste-location-vente-defibrillateurs'),
                ],
            ],
        ];

        return view('pages/specialiste-location-vente-defibrillateurs', compact('data'));
    }
}
