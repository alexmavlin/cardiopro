<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LivraisonInstallationDefibrillateurController extends Controller
{
    private $description = "Installateur de défibrillateur expérimenté, CardioPro propose un service complet d’installation et de Maintenance. Demandez votre Devis";
    private $keywords = "installation defibrillateur";
    private $title = "Installation Défibrillateur pour Votre Entreprise Livraison sous 24H";
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
            'title' => $this->title,
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'title' => "Service d'achat et location pour installation de défibrillateur",
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Produits',
                    'link' => "#",
                ],
                [
                    'name' => 'Installation de défibrillateur',
                    'title' => "Installation et pose de défibrillateur automatique",
                    'link' => route('livraison-installation-defibrillateur'),
                ],
            ],
        ];

        return view('pages/livraison-installation-defibrillateur', compact('data'));
    }
}
