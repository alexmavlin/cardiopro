<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefibrillateurCardiaqueCestQuoiController extends Controller
{
    private $description = "Qu’est ce qu’un défibrillateur cardiaque ? Comment cet appareil de sauvetage fonctionne ? Définition et explication de ce qu’est un défibrillateur.";
    private $keywords = "c'est quoi un défibrillateur cardiaque, défibrillateur def";
    private $canonical;
    private $title = "Défibrillateur Cardiaque definition";

    public function __construct()
    {
        $this->canonical = route('defibrillateur-cardiaque-cest-quoi');
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
                    'title' => "achat et location de défibrillateur",
                    'link' => route('defibrillateur-cardiaque-cest-quoi'),
                ],
                [
                    'name' => "Sauvons des Vies",
                    'link' => "#",
                ],
                [
                    'name' => "Qu'est ce qu'un défibrillateur ?",
                    'title' => "Définition défibrillateur c'est quoi ?",
                    'link' => route('defibrillateur-cardiaque-cest-quoi'),
                ],
            ],
        ];

        return view('pages/defibrillateur-cardiaque-cest-quoi', compact('data'));
    }
}
