<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormuleLocationAchatDaeDsaController extends Controller
{
    private $description = "La location et l'achat de DAE ou DSA se différencie par de nombreux facteurs. Cependant, peu importe votre moyen d’acquisition, il est nécessaire de prendre en compte la maintenance, la signalétique et la déclaration de votre défibrillateur en choisissant un spécialiste de la vente de défibrillateur en France.";
    private $keywords = "achat DAE, achat DSA, Location DAE, Location DSA, DAE, DSA";
    private $title = "Pack Location et Achat DAE et DSA pour Entreprise et ERP | Nos Offres | Spécialiste du Défibrillateur Automatique | CardioPro";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('formule-dae-dsa');
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
                    'name' => 'Formule location et achat DAE',
                    'link' => route('formule-dae-dsa'),
                ],
            ],
        ];

        return view('pages/formule-location-achat-dae-dsa', compact('data'));
    }
}
