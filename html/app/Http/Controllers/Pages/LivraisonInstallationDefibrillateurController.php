<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LivraisonInstallationDefibrillateurController extends Controller
{
    private $description = "Installateur de défibrillateur expérimenté, CardioPro propose un service complet d’installation et de Maintenance. Demandez votre Devis";
    private $keywords = "installation defibrillateur";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('livraison-installation-defibrillateur');
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
                    'name' => 'Nos Produits',
                    'link' => '#',
                ],
                [
                    'name' => 'Installation de défibrillateur',
                    'link' => route('livraison-installation-defibrillateur'),
                ],
            ],
        ];

        return view('pages/livraison-installation-defibrillateur', compact('data'));
    }
}
