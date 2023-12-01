<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObligationsController extends Controller
{
    private $description = "Etes vous dans l'obligation de vous équipez d'un Défibrillateur dans votre entreprise ou votre ERP? CardioPro réalise votre audit gratuitement";
    private $keywords = "défibrillateurs";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('obligations');
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
                    'link' => route('defibrillateur-prix'),
                ],
                [
                    'name' => 'Défibrillateur Obligatoire',
                    'link' => route('obligations'),
                ],
            ],
        ];

        return view('pages/obligations', compact('data'));
    }
}
