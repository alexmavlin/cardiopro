<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    private $description = "Défibrillateur en Location ou à l'Achat avec une Formation à Distance, Livraison sous 48H. N'hésitez pas à demander un Devis Réponse dans la Journée &#9200;";
    private $keywords = "défibrillateur cardiaque";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('index');
    }

    public function __invoke()
    {
        $data = [
            'description' => $this->description,
            'keywords' => $this->keywords,
            'canonical' => $this->canonical,
        ];

        return view('index', compact('data'));
    }
}
