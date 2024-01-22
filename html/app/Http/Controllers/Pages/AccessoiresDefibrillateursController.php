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
                    'title' => "Location et achat de Défibrillateur",
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Produits',
                    'link' => "#",
                ],
                [
                    'name' => 'Accessoires pour défibrillateurs',
                    'title' => "Défibrillateur de Formation, Batterie, Électrodes, Boitier pour pose",
                    'link' => route('accessoires-defibrillateurs'),
                ],
            ],
        ];

        return view('pages/accessoires-defibrillateurs', compact('data'));
    }
}
