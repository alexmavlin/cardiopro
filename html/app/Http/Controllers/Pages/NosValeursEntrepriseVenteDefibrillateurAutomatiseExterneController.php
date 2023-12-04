<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NosValeursEntrepriseVenteDefibrillateurAutomatiseExterneController extends Controller
{
    private $description = "S’équiper d’un défibrillateur automatisé externe est un geste citoyen qui sauvera potentiellement des vies. Les gestes de premiers secours et massage cardiaque ne suffisent souvent pas à sauver une victime, c’est pourquoi les DAE sont essentiels pour maximiser les chances de survie.";
    private $keywords = "Défibrillateur automatisé externe";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('nos-valeurs-entreprise-vente-defibrillateur-automatise-externe');
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
                    'name' => 'Nos Valeurs',
                    'link' => route('nos-valeurs-entreprise-vente-defibrillateur-automatise-externe'),
                ],
            ],
        ];

        return view('pages/nos-valeurs-entreprise-vente-defibrillateur-automatise-externe', compact('data'));
    }
}
