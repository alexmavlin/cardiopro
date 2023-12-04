<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefibrillateursFoireAuxQuestionsController extends Controller
{
    private $description = "Qu’est ce qu’un défibrillateur automatique externe (DAE) ? CardioPro répond à toute vos questions sur l’utilisation d’un défibrillateur automatique ou semi-automatique, l’achat ou la location et les obligations concernant les défibrillateurs cardiaques.";
    private $keywords = "défibrillateurs";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('faq');
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
                    'name' => 'FAQ Défibrillateur',
                    'link' => route('faq'),
                ],
            ],
        ];

        return view('pages/defibrillateurs-foire-aux-questions', compact('data'));
    }
}
