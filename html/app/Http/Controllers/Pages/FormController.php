<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    private $description = "Defibrillateur-Shop - Achat Défibrillateur DAE";
    private $keywords = "";
    private $title = "CardioPro.fr | Form |  |";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('form');
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
                    'name' => 'Home',
                    'title' => "Défibrillateur automatisé externe",
                    'link' => route('index'),
                ],
                [
                    'name' => 'Form',
                    'title' => "Spécialiste location et vente Défibrillateur automatisé externe",
                    'link' => route('form'),
                ],
            ],
        ];

        return view('pages/form', compact('data'));
    }
}
