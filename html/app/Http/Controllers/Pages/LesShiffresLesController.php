<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class LesShiffresLesController extends Controller
{
    private $description = "Un arrêt cardiaque est difficile à appréhender et est très souvent fatal, comme le montre les statistiques. L’utilisation d’un DAE peut multiplier par 5 les chances de survie d’une victime. C’est pour cela que la mission de CardioPro est de démocratiser l’installation de défibrillateurs à l’échelle nationale.";
    private $keywords = "défibrillateurs";
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
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'link' => route('index'),
                ],
                [
                    'name' => 'Les Chiffres Clés',
                    'link' => route('chiffres-cles-arret-cardiaque'),
                ],
            ],
        ];

        return view('pages/chiffres-cles-arret-cardiaque', compact('data'));
    }
}
