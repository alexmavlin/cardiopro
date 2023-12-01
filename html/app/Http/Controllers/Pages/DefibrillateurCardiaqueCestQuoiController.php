<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefibrillateurCardiaqueCestQuoiController extends Controller
{
    private $description = "Qu’est ce qu’un défibrillateur cardiaque ? Comment cet appareil de sauvetage fonctionne ? Définition et explication de ce qu’est un défibrillateur.";
    private $keywords = "c'est quoi un défibrillateur cardiaque, défibrillateur def";
    private $canonical;

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
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'link' => route('defibrillateur-cardiaque-cest-quoi'),
                ],
                [
                    'name' => "Qu'est ce qu'un défibrillateur ?",
                    'link' => route('defibrillateur-cardiaque-cest-quoi'),
                ],
            ],
        ];

        return view('pages/defibrillateur-cardiaque-cest-quoi', compact('data'));
    }
}
