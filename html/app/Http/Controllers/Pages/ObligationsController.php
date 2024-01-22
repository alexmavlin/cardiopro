<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObligationsController extends Controller
{
    private $description = "Etes vous dans l'obligation de vous équipez d'un Défibrillateur dans votre entreprise ou votre ERP? CardioPro réalise votre audit gratuitement";
    private $keywords = "défibrillateurs";
    private $title = "Défibrillateur Obligatoire  le guide complet pour etre en règle en 2023";
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
            'title' => $this->title,
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'title' => "Achat de défibrillateur en cas d'obligation",
                    'link' => route('index'),
                ],
                [
                    'name' => 'Nos Produits',
                    'link' => "#",
                ],
                [
                    'name' => 'Défibrillateur Obligatoire',
                    'title' => "Défibrillateur obligatoire ERP 2022 2021",
                    'link' => route('obligations'),
                ],
            ],
        ];

        return view('pages/obligations', compact('data'));
    }
}
