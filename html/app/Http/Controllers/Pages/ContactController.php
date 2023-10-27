<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $description = "Contact Cardiopro, spécialiste du défibrillateur. Achat et location de DAE et DSA, livraison et in";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('contact');
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
                    'name' => 'Contact',
                    'link' => route('contact'),
                ],
            ],
        ];

        return view('pages/contact', compact('data'));
    }
}
