<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccessoiresDefibrillateursController extends Controller
{
    private $description = "Gamme d'accessoires pour Défibrillateur : Batterie , Défibrillateur de Formation, Support Mural , Electrode , Signalétique.";
    private $keywords = "accessoires défibrillateurs";
    private $title = "Accessoires pour Défibrillateur • Batterie Electrode Support Mural";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('accessoires-defibrillateurs');
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
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Produits',
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Accessoires pour défibrillateurs',
                    'link' => route('accessoires-defibrillateurs'),
                ],
            ],
        ];

        return view('pages/accessoires-defibrillateurs', compact('data'));
    }
}
