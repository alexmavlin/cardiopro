<?php

namespace App\Http\Controllers\Pages\Accessories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accessoireDefibrillateurSamaritanPADTrainerController extends Controller
{
    // accessoire-defibrillateur-Samaritan-PAD-Trainer

    private $description = "Un défibrillateur de formation permet de former un individu à l’utilisation d’un DAE, il ne délivre pas de réel choc électrique mais est tout autant réaliste. Le Samaritan PAD Trainer offre une simulation parfaitement réaliste, facile à utiliser, il peut aussi être commander à distance";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('accessoire-defibrillateur-Samaritan-PAD-Trainer');
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
                    'name' => 'Accessoires',
                    'link' => route('accessoires-defibrillateurs'),
                ],
                [
                    'name' => 'Samaritan PAD Trainer',
                    'link' => route('accessoire-defibrillateur-Samaritan-PAD-Trainer'),
                ],
            ],
        ];

        return view('pages/accessories/accessoire-defibrillateur-Samaritan-PAD-Trainer', compact('data'));
    }
}
