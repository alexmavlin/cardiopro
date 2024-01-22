<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class LesShiffresLesController extends Controller
{
    private $description = "Un arrêt cardiaque est difficile à appréhender et est très souvent fatal, comme le montre les statistiques. L’utilisation d’un DAE peut multiplier par 5 les chances de survie d’une victime. C’est pour cela que la mission de CardioPro est de démocratiser l’installation de défibrillateurs à l’échelle nationale.";
    private $keywords = "défibrillateurs";
    private $title = "Les Chiffres Clés de l'Arrêt Cardiaque | Sauvons des vies | Spécialiste du Défibrillateur Automatique | CardioPro";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('chiffres-cles-arret-cardiaque');
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
                    'title' => "Vente Défibrillateur automatique et semi-auto",
                    'link' => route('index'),
                ],
                [
                    'name' => "Sauvons des Vies",
                    'link' => "#",
                ],
                [
                    'name' => 'Les Chiffres Clés',
                    'title' => "Les chiffres clés de l'arrêt cardiaque",
                    'link' => route('chiffres-cles-arret-cardiaque'),
                ],
            ],
        ];

        return view('pages/chiffres-cles-arret-cardiaque', compact('data'));
    }
}
